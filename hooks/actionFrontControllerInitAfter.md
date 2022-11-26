---
menuTitle: actionFrontControllerInitAfter
Title: actionFrontControllerInitAfter
hidden: true
hookTitle: Perform actions after front office controller initialization
files:
  - classes/controller/FrontController.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionFrontControllerInitAfter

## Information

{{% notice tip %}}
**Perform actions after front office controller initialization:** 

This hook is launched after the initialization of all front office controllers
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/FrontController.php](classes/controller/FrontController.php)

## Hook call with parameters

```php
Hook::exec(
            'actionFrontControllerInitAfter',
            [
                'controller' => $this,
            ]
        )
```