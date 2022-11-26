<?php

/**
 * Usage : php doctools/extract_hooks.php prestashop_8.0.0-rc.1+build.1/ devdocs-site/src/content/8/modules/concepts/hooks/list-of-hooks/
 */

$path = $argv[1];
$hookMarkdownDir = $argv[2];

$skipDirs = ["var/cache", "vendor"];

$regexList = [
    "legacy" => [
        //'/Hook\:\:exec\((.*?)\'(.*?)\'\,(.*?)\[(.*?)\](\,\ (.*))?\)(\;|\,)/is', // legacy, with arguments, mono or multiline
        //'/Hook\:\:exec\(\'(.*?)\'(.*?)?\)(\;|\,)/i', // legacy, no arguments, monoline,
        '/Hook\:\:exec\s*(\(([^(),]*)(?:(?:[^(),]+|,)|(?-2))*\))/is'
    ],
    "symfony" => [
        '/dispatchHook\s*(\(([^(),]*)(?:(?:[^(),]+|,)|(?-2))*\))/is', // symfony
        '/dispatchWithParameters\s*(\(([^(),]*)(?:(?:[^(),]+|,)|(?-2))*\))/is' // symfony, other method
    ],
    "smarty" => [
        '/\{hook\ h\=\'(.*?)\'(.*)\}/i', // smarty
    ],
    "twig" => [
        '/\{\{\ renderhook\(\'(.*?)\'(.*?)\}\}/is', // twig
        '/\{\{\ renderhooksarray\(\'(.*?)\'(.*?)\}\}/is' // twig
    ]
];

$deprecated_hooks = [
    // Back office
    'backOfficeFooter' => ['from' => '1.7.0.0'],
    'displayBackOfficeFooter' => ['from' => '1.7.0.0'],

    // Shipping step
    'displayCarrierList' => ['from' => '1.7.0.0'],
    'extraCarrier' => ['from' => '1.7.0.0'],

    // Payment step
    'hookBackBeforePayment' => ['from' => '1.7.0.0'],
    'hookDisplayBeforePayment' => ['from' => '1.7.0.0'],
    'hookOverrideTOSDisplay' => ['from' => '1.7.0.0'],

    // Product page
    'displayProductTabContent' => ['from' => '1.7.0.0'],
    'displayProductTab' => ['from' => '1.7.0.0'],

    // Order page
    'displayAdminOrderRight' => ['from' => '1.7.7.0'],
    'displayAdminOrderLeft' => ['from' => '1.7.7.0'],
    'displayAdminOrderTabOrder' => ['from' => '1.7.7.0'],
    'displayAdminOrderTabShip' => ['from' => '1.7.7.0'],
    'displayAdminOrderContentOrder' => ['from' => '1.7.7.0'],
    'displayAdminOrderContentShip' => ['from' => '1.7.7.0'],

    // Controller
    'actionAjaxDieBefore' => ['from' => '1.6.1.1'],
    'actionGetProductPropertiesAfter' => ['from' => '1.7.8.0'],
];

$hookDescriptionReferenceXml = "https://raw.githubusercontent.com/PrestaShop/PrestaShop/develop/install-dev/data/xml/hook.xml";
$hookDescriptions = extractHookDescription($hookDescriptionReferenceXml);

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

$extractedHookNames = [];

foreach($hookList as $hookSlug => $hookArray){
    
    $hookName = $hookArray[0]["name"];

    $locatedIn = [];
    $types = [];

    $locatedIn = array_unique(
        array_map(
            fn($hookInfo) => $hookInfo["file"], 
            $hookArray
        )
    );

    $locatedInLinks = array_unique(
        array_map(
            fn($hookInfo) => "[https://github.com/PrestaShop/PrestaShop/blob/8.0.x/" . $hookInfo["file"] ."](". $hookInfo["file"] .")", 
            $hookArray
        )
    );

    $type = guessType($hookName, $locatedIn);
    $locations = guessLocations($hookName, $locatedIn);

    $locatedInStr = "\n  - " . implode("\n  - ", $locatedIn);
    $locatedInLinksStr = "\n  - " . implode("\n  - ", $locatedInLinks);
    $locationsStr = "\n  - " . implode("\n  - ", $locations);
    $typeStr = "\n  - " . $type;

    $referenceTitle = isset($hookDescriptions[$hookName]) ? $hookDescriptions[$hookName]["title"] : "";
    $referenceDescription = isset($hookDescriptions[$hookName]) ? $hookDescriptions[$hookName]["description"] : "";

    $notice = "";
    if($referenceTitle != ""){
        $notice = <<<EOF

{{% notice tip %}}
**{$referenceTitle}:** 

{$referenceDescription}
{{% /notice %}}

EOF;
    }

    $deprecatedNotice = "";
    if(array_key_exists($hookName, $deprecated_hooks)){
        $deprecatedNotice = <<<EOF

{{% notice warning %}}
**Deprecated:** Since {$deprecated_hooks[$hookName]['from']}
{{% /notice %}}

EOF;
    }

    $content = <<<EOF
---
menuTitle: {$hookName}
Title: {$hookName}
hidden: true
hookTitle: {$referenceTitle}
files:{$locatedInStr}
locations:{$locationsStr}
type:{$typeStr}
---

# Hook {$hookName}

## Information
{$notice}{$deprecatedNotice}
Hook locations: {$locationsStr}

Hook type: {$typeStr}

Located in: {$locatedInLinksStr}

## Hook call with parameters

```php
{$hookArray[0]["fullCall"]}
```
EOF;

    echo $hookMarkdownDir . $hookSlug . ".md\n";
    $file = file_put_contents($hookMarkdownDir . $hookSlug . ".md", $content);

    $extractedHookNames[] = $hookName;
}


// list missing hooks against actual doc :

$actualDocumentation = 'https://raw.githubusercontent.com/PrestaShop/docs/8.x/modules/concepts/hooks/list-of-hooks.md';
$actualDocumentationHooks = extractActualDocumentation($actualDocumentation);

echo "Hooks found in actual devdocs, but not in this extract :\n";
foreach($actualDocumentationHooks as $hookName){
    if(!in_array($hookName, $extractedHookNames)){
        echo $hookName . "\n";
    }
}

/**
 * functions
 */

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

    if(!empty($result[0])){ var_dump($result);
        for($i = 0; $i < sizeof($result[0]); $i++){
            if(isset($result[2][$i])){
                $hookName = cleanHookName(cleanString($result[2][$i]));
            } else {
                $hookName = cleanHookName(cleanString($result[1][$i]));
            }
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
    $string = trim($string);
    $string = str_replace(' ', '-', $string); 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
}

function guessLocations($hookName, $locatedIn)
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

function guessType($hookName, $locatedIn)
{
    
    if(false !== strpos($hookName, "ction")){
        return "action";
    }

    if(false !== strpos($hookName, "isplay")){
        return "display";
    }

    return "";
}

function cleanHookName($hookName)
{
    $hookName = str_replace([
        '--getclassthis--ucfirstthis-action--',
        '--this-getFullyQualifiedName--',
        '--this-controllername--',
        '--ucfirstthis-action--',
        '--Containercamelizeform-getName--',
        '--helperListConfiguration-legacyControllerName--',
        '--Containercamelizethis-gridId--',
        '--Containercamelizedefinition-getId--',
        '--this-camelizeformBuilder-getName--'
    ], [
        '<ClassName><Action>',
        '<ClassName>',
        '<Controller>',
        '<Action>',
        '<FormName>',
        '<LegacyControllerName>',
        '<GridId>',
        '<DefinitionId>',
        '<FormName>'
    ], $hookName);

    return $hookName;
}

function extractHookDescription($xmlFile){
    $xmlContent = simplexml_load_file($xmlFile);
    $hookDescriptions = [];

    foreach($xmlContent->entities->hook as $node){
        $hookDescriptions[$node->name->__toString()] = [
            "name" => $node->name->__toString(),
            "title" => $node->title->__toString(),
            "description" => $node->description->__toString()
        ];

    }

    return $hookDescriptions;
}

function extractActualDocumentation($actualDocumentationUrl)
{
    $documentedHooks = [];
    $contents = file($actualDocumentationUrl);
    $previousLine = "";
    $actualLine = "";
    foreach($contents as $content){
        $previousLine = $actualLine;
        $actualLine = str_replace(
            ["\n", "&lt;"], 
            ["", "<"], 
            trim($content)
        );
        if($actualLine == ":"){
            $documentedHooks[] = $previousLine;
        }
    }
    return $documentedHooks;
}