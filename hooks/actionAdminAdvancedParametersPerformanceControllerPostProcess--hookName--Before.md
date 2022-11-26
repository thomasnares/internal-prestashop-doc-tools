---
menuTitle: actionAdminAdvancedParametersPerformanceControllerPostProcess--hookName--Before
Title: actionAdminAdvancedParametersPerformanceControllerPostProcess--hookName--Before
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/PerformanceController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminAdvancedParametersPerformanceControllerPostProcess--hookName--Before

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/PerformanceController.php](src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/PerformanceController.php)

## Hook call with parameters

```php
dispatchHook(
            'actionAdminAdvancedParametersPerformanceControllerPostProcess' . $hookName . 'Before',
            ['controller' => $this]
        )
```