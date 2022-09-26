<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

/**
 * This tool is meant to help you find broken or redirect urls in the documentation
 */

$path = $argv[1];
$files = listAllFiles($path);

$githubUrls = [];

foreach($files as $file){
    $urls = findUrlsInFile($file, "github");

    if(!empty($urls)){
        $githubUrls[$file] = $urls;
    }
}

foreach($githubUrls as $file => $urls){
    foreach($urls as $url){
        $return = testUrl($url);
        usleep(500000);
        if(!in_array($return["code"], [200])){
            echo sprintf("%s\t%s\t%s\t%s\n", $file, $url, $return["code"], $return["redirect"]);
        }
    }
}

function findUrlsInFile($file, $type = "")
{
    $content = file_get_contents($file);

    if("github" === $type){
        preg_match_all(
            '/\b(?:https?|ftp|file):\/\/github\.com[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i', 
            $content, 
            $result, 
            PREG_PATTERN_ORDER
        );
    } else {
        preg_match_all(
            '/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i', 
            $content, 
            $result, 
            PREG_PATTERN_ORDER
        );
    }

    return $result[0];
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

function testUrl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, true);  
    curl_setopt($ch, CURLOPT_NOBODY, true);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_exec($ch);

    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $redirect = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
    curl_close($ch);

    return [
        "code" => $httpcode, 
        "redirect" => $redirect
    ];
}