---
menuTitle: actionAjaxDie--controller--method--Before
Title: actionAjaxDie--controller--method--Before
hidden: true
hookTitle: 
files:
  - classes/controller/Controller.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionAjaxDie--controller--method--Before

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/Controller.php](classes/controller/Controller.php)

## Hook call with parameters

```php
Hook::exec('actionAjaxDie' . $controller . $method . 'Before', ['value' => $value])
```