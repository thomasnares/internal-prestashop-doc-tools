---
menuTitle: actionProductSave
Title: actionProductSave
hidden: true
hookTitle: Saving products
files:
  - classes/Product.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionProductSave

## Information

{{% notice tip %}}
**Saving products:** 

This hook is called while saving products
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Product.php](classes/Product.php)

## Hook call with parameters

```php
Hook::exec('actionProductSave', ['id_product' => (int) $this->id, 'product' => $this])
```