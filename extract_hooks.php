<?php

/**
 * Usage : php doctools/extract_hooks.php prestashop_8.0.0-rc.1+build.1/ devdocs-site/src/content/8/modules/concepts/hooks/list-hooks/
 */

$path = $argv[1];
$hookMarkdownDir = $argv[2];

$skipDirs = ["var/cache", "vendor"];

$regexList = [
    "legacy" => [
        '/Hook\:\:exec\(\'(.*?)\'\,\ \[(.*?)\](\,\ (.*))?\)(\;|\,)/is', // legacy, with arguments, mono or multiline
        '/Hook\:\:exec\(\'(.*?)\'(.*?)?\)(\;|\,)/i', // legacy, no arguments, monoline
    ],
    "symfony" => [
        '/dispatchHook\(\'(.*?)\'\,(.*?)\;/is', // symfony
    ],
    "smarty" => [
        '/\{hook\ h\=\'(.*?)\'(.*)\}/i', // smarty
    ],
    "twig" => [
        '/\{\{\ renderhook\(\'(.*?)\'(.*?)\}\}/is', // twig
        '/\{\{\ renderhooksarray\(\'(.*?)\'(.*?)\}\}/is' // twig
    ]
];

// clean hook dir
foreach(glob($hookMarkdownDir . "*") as $file){
    if(false === strpos($file, "_index.md")){
        unlink($file);
    }
}

$files = listAllFiles($path);
$hookList = [];
$count = 0;

foreach($files as $file){
    $hooksInFile = [];
    $skipFile = false;

    foreach($skipDirs as $skipDir){
        if(strpos($file, $skipDir) !== false){
            $skipFile = true;
            break;
        }
    }

    if(!$skipFile){
        foreach($regexList as $patternType => $patterns){
            foreach($patterns as $pattern){                
                $hooksInFile = findHooksInFileRegex($file, $path, $patternType, $pattern, $count);
                $hookList = array_merge($hookList, $hooksInFile);
            }
        }
    }
}

foreach($hookList as $hookSlug => $hookArray){
    
    $locatedIn = [];
    $types = [];

    $locatedIn = array_unique(
        array_map(
            fn($hookInfo) => $hookInfo["file"], 
            $hookArray
        )
    );

    $hookTypes = array_unique(
        array_map(
            fn($hookInfo) => $hookInfo["hookType"], 
            $hookArray
        )
    );

    $types = guessType($hookArray[0]["name"], $locatedIn);

    $locatedInStr = "\n  - " . implode("\n  - ", $locatedIn);
    $hookTypesStr = "\n  - " . implode("\n  - ", $hookTypes);
    $typesStr = "\n  - " . implode("\n  - ", $types);

    $content = <<<EOF
---
menuTitle: {$hookArray[0]["name"]}
title: {$hookArray[0]["name"]}
hidden: true
files:{$locatedInStr}
types:{$typesStr}
hookTypes:{$hookTypesStr}
---

# Hook : {$hookArray[0]["name"]}

Located in :
{$locatedInStr}

## Parameters

```php
{$hookArray[0]["fullCall"]}
```
EOF;

    $file = file_put_contents($hookMarkdownDir . $hookSlug . ".md", $content);

}

function findHooksInFileRegex($file, $stripDir, $patternType, $pattern, &$count)
{
    $content = file_get_contents($file);

    preg_match_all(
        $pattern, 
        $content, 
        $result, 
        PREG_PATTERN_ORDER
    );
    
    $hooksInFile = [];

    $fileName = str_replace($stripDir, "", $file);

    if(!empty($result[1])){
        for($i = 0; $i < sizeof($result[1]); $i++){
            $hookName = cleanHookName(cleanString($result[1][$i]));
            $fullCall = $result[0][$i];
            $count++;
            $hooksInFile[$hookName][] = [
                "name" => $hookName, 
                "file" => $fileName, 
                "fullCall" => $fullCall,
                "hookType" => $patternType
            ];
        }
    } 

    return $hooksInFile;
}

function findHooksInFileVariant($file, $stripDir)
{

    return [];
}

function listAllFiles($dir) 
{
    $array = array_diff(scandir($dir), array('.', '..'));
   
    foreach ($array as &$item) {
        $item = $dir . $item;
    }
    unset($item);

    foreach ($array as $item) {
        if (is_dir($item)) {
            $array = array_merge($array, listAllFiles($item . DIRECTORY_SEPARATOR));
        }
    }
    
    return $array;
}

function cleanString($string) 
{
    $string = str_replace(' ', '-', $string); 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
}

function guessType($hookName, $locatedIn)
{
    $types = [];
    
    if(false !== strpos($hookName, "Admin")){
        $types[] = "backoffice";
    }

    if(false !== strpos($hookName, "actionObject")){
        $types[] = "backoffice";
        $types[] = "frontoffice";
    }

    foreach($locatedIn as $file){
        if(false !== strpos($file, "Admin")){
            $types[] = "backoffice";
        }
    }

    if(empty($types)){
        $types[] = "frontoffice";
    }

    return array_unique($types);
}

function cleanHookName($hookName){

    $hookName = str_replace([
        '--getclassthis--ucfirstthis-action--',
        '--this-getFullyQualifiedName--',
        '--this-controllername--',
        '--ucfirstthis-action--',
    ], [
        '<ClassName><Action>',
        '<ClassName>',
        '<Controller>',
        '<Action>'
    ], $hookName);

    return $hookName;

}