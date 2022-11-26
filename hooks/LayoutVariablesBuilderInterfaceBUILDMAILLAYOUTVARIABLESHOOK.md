---
menuTitle: LayoutVariablesBuilderInterfaceBUILDMAILLAYOUTVARIABLESHOOK
Title: LayoutVariablesBuilderInterfaceBUILDMAILLAYOUTVARIABLESHOOK
hidden: true
hookTitle: 
files:
  - src/Core/MailTemplate/Layout/LayoutVariablesBuilder.php
locations:
  - frontoffice
type:
  - 
---

# Hook LayoutVariablesBuilderInterfaceBUILDMAILLAYOUTVARIABLESHOOK

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/MailTemplate/Layout/LayoutVariablesBuilder.php](src/Core/MailTemplate/Layout/LayoutVariablesBuilder.php)

## Hook call with parameters

```php
dispatchWithParameters(
            LayoutVariablesBuilderInterface::BUILD_MAIL_LAYOUT_VARIABLES_HOOK,
            [
                'mailLayout' => $mailLayout,
                'mailLayoutVariables' => &$mailLayoutVariables,
            ]
        )
```