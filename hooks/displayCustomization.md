---
menuTitle: displayCustomization
Title: displayCustomization
hidden: true
hookTitle: 
files:
  - classes/Product.php
locations:
  - frontoffice
type:
  - display
---

# Hook displayCustomization

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Product.php](classes/Product.php)

## Hook call with parameters

```php
Hook::exec('displayCustomization', ['customization' => $row], (int) $row['id_module'])
```