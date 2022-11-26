---
menuTitle: actionAdminShopParametersProductPreferencesControllerPostProcess--hookName--Before
Title: actionAdminShopParametersProductPreferencesControllerPostProcess--hookName--Before
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/ProductPreferencesController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminShopParametersProductPreferencesControllerPostProcess--hookName--Before

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/ProductPreferencesController.php](src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/ProductPreferencesController.php)

## Hook call with parameters

```php
dispatchHook(
            'actionAdminShopParametersProductPreferencesControllerPostProcess' . $hookName . 'Before',
            ['controller' => $this]
        )
```