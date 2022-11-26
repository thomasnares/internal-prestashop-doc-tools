---
menuTitle: actionAdminLogsControllerPostProcessBefore
Title: actionAdminLogsControllerPostProcessBefore
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/LogsController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminLogsControllerPostProcessBefore

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/LogsController.php](src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/LogsController.php)

## Hook call with parameters

```php
dispatchHook('actionAdminLogsControllerPostProcessBefore', ['controller' => $this])
```