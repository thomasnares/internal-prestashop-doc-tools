<?php

/**
 * Usage : php doctools/extract_hooks.php prestashop_8.0.0-rc.1+build.1/ doctools/hooks/
 */

$path = $argv[1];
$hookMarkdownDir = $argv[2];

$skipDirs = ["var/cache", "vendor"];

$regexList = [
    '/Hook\:\:exec\(\'(.*?)\'\,(.*?)(\;|(Hook))/is', // legacy
    '/dispatchHook\(\'(.*?)\'\,(.*?)\;/is', // symfony
    '/\{hook\ h\=\'(.*?)\'(.*)\}/i', // smarty
    '/\{\{\ renderhook\(\'(.*?)\'(.*?)\}\}/is' // twig
];

// clean hook dir
foreach(glob($hookMarkdownDir . "*") as $file){
    unlink($file);
}

$files = listAllFiles($path);
$hookList = [];

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
        foreach($regexList as $pattern){
            $hooksInFile = findHooksInFile($file, $path, $pattern);
            $hookList = array_merge($hookList, $hooksInFile);
        }
    }
}

foreach($hookList as $hookSlug => $hookArray){
    
    $content = <<<EOF
# Hook : {$hookArray[0]["name"]}

EOF;

    foreach($hookArray as $hookInfo){
        $content .= <<<EOF
{$hookInfo["file"]} :

{$hookInfo["fullCall"]}

EOF;
    }

    $file = file_put_contents($hookMarkdownDir . $hookSlug . ".md", $content);

}

function findHooksInFile($file, $stripDir, $pattern)
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
            $hookName = $result[1][$i];
            $fullCall = $result[0][$i];
            $hooksInFile[cleanString($hookName)][] = ["name" => $hookName, "file" => $fileName, "fullCall" => $fullCall];
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
    $string = str_replace(' ', '-', $string); 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); 
}