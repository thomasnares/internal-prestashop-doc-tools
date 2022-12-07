<?php

/**
 * Usage : php doctools/extract_hooks.php prestashop_8.0.0-rc.1+build.1/ devdocs-site/src/content/8/modules/concepts/hooks/list-of-hooks/
 */

$path = $argv[1];
$hookMarkdownDir = $argv[2];

$skipDirs = ["var/cache", "vendor"];

$regexList = [
    "legacy" => [
        '/Hook\:\:exec\((.*?)\'(.*?)\'\,(.*?)\[(.*?)\](\,\ (.*))?\)(\;|\,)/is', // legacy, with arguments, mono or multiline
        '/Hook\:\:exec\(\'(.*?)\'(.*?)?\)(\;|\,)/i', // legacy, no arguments, monoline,
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

$skipHooks = [
    "this-getHookName",
    "paramsh",
    "new-Hook",
    "hookName",
    "HookInterface-hook",
    "displayBackOfficeHeader-----------------------------Fetch-Employee-Menu--------menuLinksCollections--new-ActionsBarButtonsCollection--------Hookexec------------displayBackOfficeEmployeeMenu",
    "actionObject--this-getFullyQualifiedName",
    "actionAdmin--ucfirst",
    "action--getclass",
    'actionthis-hookNameSave'
];

$hookDescriptionReferenceXml = "https://raw.githubusercontent.com/PrestaShop/PrestaShop/develop/install-dev/data/xml/hook.xml";
$hookDescriptions = extractHookDescription($hookDescriptionReferenceXml);

$hookAliasesReferenceXml = "https://raw.githubusercontent.com/PrestaShop/PrestaShop/develop/install-dev/data/xml/hook_alias.xml";
$hookAliases = extractHookAliases($hookAliasesReferenceXml);

$parametersReferenceMd = "https://raw.githubusercontent.com/PrestaShop/docs/8.x/modules/concepts/hooks/list-of-hooks.md";
$parameters = extractParameters($parametersReferenceMd);

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

    if(in_array($hookName, $skipHooks)){
        continue;
    }

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

    $aliasesStr = "";
    if(array_key_exists($hookName, $hookAliases)){
        $aliasesStr = "\n - " . implode("\n - ", $hookAliases[$hookName]);
    }

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
hookAliases:{$aliasesStr}
---

# Hook {$hookName}
EOF;

if($aliasesStr != ""){
    $content .= <<<EOF


Aliases: {$aliasesStr}


EOF;   
}

    $content .= <<<EOF


## Information
{$notice}{$deprecatedNotice}
Hook locations: {$locationsStr}

Hook type: {$typeStr}

Located in: {$locatedInLinksStr}
EOF;

if(isset($parameters[$hookName])){
    $content .= <<<EOF


## Parameters details

{$parameters[$hookName]}
EOF;
}

    $content .= <<<EOF


## Hook call in codebase

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
            if(isset($result[2][$i]) && ($patternType == "legacy" || $patternType == "symfony")){
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
        '--this-camelizeformBuilder-getName--',
        'LayoutVariablesBuilderInterfaceBUILDMAILLAYOUTVARIABLESHOOK',
        'ThemeCatalogInterfaceLISTMAILTHEMESHOOK',
        'selfHOOKADDURLS',
        'selfDISPATCHERAFTERACTION',
        'selfDISPATCHERBEFOREACTION',
        'MailTemplateRendererInterfaceGETMAILLAYOUTTRANSFORMATIONS',
        'LayoutVariablesBuilderInterfaceBUILDMAILLAYOUTVARIABLESHOOK',
        '--hookName--',
        'actionBeforeUpdate--Containercamelize',
        'actionBeforeCreate--Containercamelize',
        'actionAfterUpdate--Containercamelize',
        'actionAfterCreate--Containercamelize',
        'actionBeforeAjaxDie--controller--method',
        'actionAjaxDie--controller--method--Before',
        'action--this-camelize',
        'action--Containercamelize'
    ], [
        '<ClassName><Action>',
        '<ClassName>',
        '<Controller>',
        '<Action>',
        '<FormName>',
        '<LegacyControllerName>',
        '<GridId>',
        '<DefinitionId>',
        '<FormName>',
        'actionBuildMailLayoutVariables',
        'actionListMailThemes',
        'gSitemapAppendUrls',
        'actionDispatcherAfter',
        'actionDispatcherBefore',
        'actionGetMailLayoutTransformations',
        'actionBuildMailLayoutVariables',
        '<HookName>',
        'actionBeforeUpdate<FormName>FormHandler',
        'actionBeforeCreate<FormName>FormHandler',
        'actionAfterUpdate<FormName>FormHandler',
        'actionAfterCreate<FormName>FormHandler',
        'actionBeforeAjaxDie<Controller><Method>',
        'actionAjaxDie<Controller><Method>Before',
        'action<FormName>FormDataProviderDefaultData',
        'action<DefinitionId>GridPresenterModifier'

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

function extractHookAliases($xmlFile){
    $xmlContent = simplexml_load_file($xmlFile);
    $hookAliases = [];
    foreach($xmlContent->entities->hook_alias as $node){ 
        if(!isset($hookAliases[$node->name->__toString()])){
            $hookAliases[$node->name->__toString()] = [];
        }
        $hookAliases[$node->name->__toString()][] = $node->alias->__toString();
    }
    return $hookAliases;
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

function extractParameters($parametersReferenceMd)
{
    $content = file($parametersReferenceMd);

    $parameters = [];
    $currentHookName = null;
    $parametersString = null;
    $skipLines = 25; // skip 25 first lines

    $capturing = false;

    for($i = $skipLines; $i < sizeof($content); $i++){
        $currentLine = $content[$i];
        if(substr($currentLine, 0, 1) != " " && substr($currentLine, 0, 1) != "\n" && substr($currentLine, 0, 1) != ":"){
            $currentHookName = trim($currentLine);
            $parametersString = "";
            $capturing = false;
        }

        if(in_array(trim($currentLine), ['```php', '```html.twig'])){
            $capturing = true;
            $currentLine = trim($currentLine) . "\n";
        }

        if(trim($currentLine) == '```'){
            $capturing = false;
            $parameters[$currentHookName] = $parametersString . trim($currentLine);
        }

        if($capturing){
            $parametersString .= $currentLine;
        }

        
    }

    return $parameters;
}