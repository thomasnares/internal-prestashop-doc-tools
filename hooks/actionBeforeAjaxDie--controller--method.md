---
menuTitle: actionBeforeAjaxDie--controller--method
Title: actionBeforeAjaxDie--controller--method
hidden: true
hookTitle: 
files:
  - classes/controller/Controller.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionBeforeAjaxDie--controller--method

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/Controller.php](classes/controller/Controller.php)

## Hook call with parameters

```php
Hook::exec('actionBeforeAjaxDie' . $controller . $method, ['value' => $value])
```