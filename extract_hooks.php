<?php

$path = $argv[1];

$skipDirs = ["var/cache", "vendor"];

$files = listAllFiles($path);

$hookList = [];

// clean hook dir
foreach(glob("doctools/hooks/*") as $file){
    unlink($file);
}

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
        $hooksInFile = findHooksInFile($file, $path);
    }

    $hookList = array_merge($hookList, $hooksInFile);
}

foreach($hookList as $hook){
    echo implode(",\t", $hook) . "\n";
}

function findHooksInFile($file, $stripDir)
{
    $content = file_get_contents($file);

    preg_match_all(
        '/Hook\:\:exec\(\'(.*?)\'\,(.*?)\;/is', 
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
            $hooksInFile[] = ["name" => $hookName, "file" => $fileName, "fullCall" => $fullCall];
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
