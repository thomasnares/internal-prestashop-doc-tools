---
menuTitle: actionAttributeDelete
Title: actionAttributeDelete
hidden: true
hookTitle: Deleting an attributes features value
files:
  - classes/ProductAttribute.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionAttributeDelete

## Information

{{% notice tip %}}
**Deleting an attributes features value:** 

This hook is called while deleting an attributes features value
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/ProductAttribute.php](classes/ProductAttribute.php)

## Hook call with parameters

```php
Hook::exec('actionAttributeDelete', ['id_attribute' => $this->id])
```