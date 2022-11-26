---
menuTitle: actionAdminShopParametersMetaControllerPostProcess--hookName--Before
Title: actionAdminShopParametersMetaControllerPostProcess--hookName--Before
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/MetaController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminShopParametersMetaControllerPostProcess--hookName--Before

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/MetaController.php](src/PrestaShopBundle/Controller/Admin/Configure/ShopParameters/MetaController.php)

## Hook call with parameters

```php
dispatchHook(
            'actionAdminShopParametersMetaControllerPostProcess' . $hookName . 'Before',
            ['controller' => $this]
        )
```