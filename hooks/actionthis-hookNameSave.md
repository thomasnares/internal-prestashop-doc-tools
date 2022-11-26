---
menuTitle: actionthis-hookNameSave
Title: actionthis-hookNameSave
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Form/Admin/Configure/AdvancedParameters/Import/ImportFormHandler.php
locations:
  - backoffice
type:
  - action
---

# Hook actionthis-hookNameSave

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Form/Admin/Configure/AdvancedParameters/Import/ImportFormHandler.php](src/PrestaShopBundle/Form/Admin/Configure/AdvancedParameters/Import/ImportFormHandler.php)

## Hook call with parameters

```php
dispatchWithParameters(
            "action{$this->hookName}Save",
            [
                'errors' => &$errors,
                'form_data' => $data,
            ]
        )
```