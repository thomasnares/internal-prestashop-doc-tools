---
menuTitle: displayBackOfficeEmployeeMenu
Title: displayBackOfficeEmployeeMenu
hidden: true
hookTitle: Administration Employee menu
files:
  - src/PrestaShopBundle/Bridge/Smarty/HeaderConfigurator.php
locations:
  - frontoffice
type:
  - display
---

# Hook displayBackOfficeEmployeeMenu

## Information

{{% notice tip %}}
**Administration Employee menu:** 

This hook is displayed in the employee menu
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Bridge/Smarty/HeaderConfigurator.php](src/PrestaShopBundle/Bridge/Smarty/HeaderConfigurator.php)

## Hook call with parameters

```php
dispatchWithParameters(
            'displayBackOfficeEmployeeMenu',
            [
                'links' => $menuLinksCollections,
            ]
        )
```