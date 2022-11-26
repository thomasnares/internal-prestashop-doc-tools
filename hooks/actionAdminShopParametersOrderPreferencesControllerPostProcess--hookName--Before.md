---
menuTitle: actionAdminShopParametersOrderPreferencesControllerPostProcess--hookName--Before
Title: actionAdminShopParametersOrderPreferencesControllerPostProcess--hookName--Before
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/OrderPreferencesController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminShopParametersOrderPreferencesControllerPostProcess--hookName--Before

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/OrderPreferencesController.php](src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/OrderPreferencesController.php)

## Hook call with parameters

```php
dispatchHook(
            'actionAdminShopParametersOrderPreferencesControllerPostProcess' . $hookName . 'Before',
            ['controller' => $this]
        )
```