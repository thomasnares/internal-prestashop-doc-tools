---
menuTitle: actionAdminMaintenanceControllerPostProcessBefore
Title: actionAdminMaintenanceControllerPostProcessBefore
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/MaintenanceController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminMaintenanceControllerPostProcessBefore

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/MaintenanceController.php](src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/MaintenanceController.php)

## Hook call with parameters

```php
dispatchHook('actionAdminMaintenanceControllerPostProcessBefore', ['controller' => $this])
```