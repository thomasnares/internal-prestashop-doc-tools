---
menuTitle: actionthis-hookNameForm
Title: actionthis-hookNameForm
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Form/Admin/Improve/International/Translations/TranslationsSettingsFormHandler.php
locations:
  - backoffice
type:
  - action
---

# Hook actionthis-hookNameForm

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Form/Admin/Improve/International/Translations/TranslationsSettingsFormHandler.php](src/PrestaShopBundle/Form/Admin/Improve/International/Translations/TranslationsSettingsFormHandler.php)

## Hook call with parameters

```php
dispatchWithParameters(
            "action{$this->hookName}Form",
            [
                'form_builder' => $formBuilder,
            ]
        )
```