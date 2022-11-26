---
menuTitle: ThemeCatalogInterfaceLISTMAILTHEMESHOOK
Title: ThemeCatalogInterfaceLISTMAILTHEMESHOOK
hidden: true
hookTitle: 
files:
  - src/Core/MailTemplate/FolderThemeCatalog.php
locations:
  - frontoffice
type:
  - 
---

# Hook ThemeCatalogInterfaceLISTMAILTHEMESHOOK

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/MailTemplate/FolderThemeCatalog.php](src/Core/MailTemplate/FolderThemeCatalog.php)

## Hook call with parameters

```php
dispatchWithParameters(
            ThemeCatalogInterface::LIST_MAIL_THEMES_HOOK,
            ['mailThemes' => $mailThemes]
        )
```