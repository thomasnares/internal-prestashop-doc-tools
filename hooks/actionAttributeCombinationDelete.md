---
menuTitle: actionAttributeCombinationDelete
Title: actionAttributeCombinationDelete
hidden: true
hookTitle: 
files:
  - classes/Combination.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionAttributeCombinationDelete

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Combination.php](classes/Combination.php)

## Hook call with parameters

```php
Hook::exec('actionAttributeCombinationDelete', ['id_product_attribute' => (int) $this->id])
```