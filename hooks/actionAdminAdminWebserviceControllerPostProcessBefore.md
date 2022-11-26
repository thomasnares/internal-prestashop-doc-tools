---
menuTitle: actionAdminAdminWebserviceControllerPostProcessBefore
Title: actionAdminAdminWebserviceControllerPostProcessBefore
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/WebserviceController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminAdminWebserviceControllerPostProcessBefore

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/WebserviceController.php](src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/WebserviceController.php)

## Hook call with parameters

```php
dispatchHook('actionAdminAdminWebserviceControllerPostProcessBefore', ['controller' => $this])
```