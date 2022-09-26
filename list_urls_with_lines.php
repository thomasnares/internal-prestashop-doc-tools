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
 * This tool is meant to help you find github urls with lines highlighted
 */

$path = $argv[1];
$files = listAllFiles($path);

$githubUrls = [];

foreach($files as $file){
    $urls = findUrlsInFile($file);

    foreach($urls as $url){ 
        echo sprintf("%s\t%s\n", $file, $url);
    }
}

function findUrlsInFile($file)
{
    $content = file_get_contents($file);

    preg_match_all(
        '/\b(?:https?):\/\/github\.com\/[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@\/%=~_|$]\#L([0-9]{1,4})(\-L[0-9]{1,4})?/i', 
        $content, 
        $result, 
        PREG_PATTERN_ORDER
    );

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
