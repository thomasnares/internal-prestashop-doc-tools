---
menuTitle: actionAdminAdministrationControllerPostProcess--hookName--Before
Title: actionAdminAdministrationControllerPostProcess--hookName--Before
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/AdministrationController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminAdministrationControllerPostProcess--hookName--Before

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/AdministrationController.php](src/PrestaShopBundle/Controller/Admin/Configure/AdvancedParameters/AdministrationController.php)

## Hook call with parameters

```php
dispatchHook(
            'actionAdminAdministrationControllerPostProcess' . $hookName . 'Before',
            ['controller' => $this]
        )
```