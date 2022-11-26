---
menuTitle: actionAdminControllerInitAfter
Title: actionAdminControllerInitAfter
hidden: true
hookTitle: Perform actions after admin controller initialization
files:
  - classes/controller/AdminController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminControllerInitAfter

## Information

{{% notice tip %}}
**Perform actions after admin controller initialization:** 

This hook is launched after the initialization of all admin controllers
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/AdminController.php](classes/controller/AdminController.php)

## Hook call with parameters

```php
Hook::exec(
            'actionAdminControllerInitAfter',
            [
                'controller' => $this,
            ]
        )
```