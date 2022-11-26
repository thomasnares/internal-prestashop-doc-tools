---
menuTitle: MailTemplateRendererInterfaceGETMAILLAYOUTTRANSFORMATIONS
Title: MailTemplateRendererInterfaceGETMAILLAYOUTTRANSFORMATIONS
hidden: true
hookTitle: 
files:
  - src/Adapter/MailTemplate/MailTemplateTwigRenderer.php
locations:
  - frontoffice
type:
  - 
---

# Hook MailTemplateRendererInterfaceGETMAILLAYOUTTRANSFORMATIONS

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/MailTemplate/MailTemplateTwigRenderer.php](src/Adapter/MailTemplate/MailTemplateTwigRenderer.php)

## Hook call with parameters

```php
dispatchWithParameters(
            MailTemplateRendererInterface::GET_MAIL_LAYOUT_TRANSFORMATIONS,
            [
                'mailLayout' => $mailLayout,
                'templateType' => $templateType,
                'layoutTransformations' => $templateTransformations,
            ]
        )
```