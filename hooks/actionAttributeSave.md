---
menuTitle: actionAttributeSave
Title: actionAttributeSave
hidden: true
hookTitle: Saving an attributes features value
files:
  - classes/ProductAttribute.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionAttributeSave

## Information

{{% notice tip %}}
**Saving an attributes features value:** 

This hook is called while saving an attributes features value
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/ProductAttribute.php](classes/ProductAttribute.php)

## Hook call with parameters

```php
Hook::exec('actionAttributeSave', ['id_attribute' => $this->id])
```