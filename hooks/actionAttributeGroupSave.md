---
menuTitle: actionAttributeGroupSave
Title: actionAttributeGroupSave
hidden: true
hookTitle: Saving an attribute group
files:
  - classes/AttributeGroup.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionAttributeGroupSave

## Information

{{% notice tip %}}
**Saving an attribute group:** 

This hook is called while saving an attributes group
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/AttributeGroup.php](classes/AttributeGroup.php)

## Hook call with parameters

```php
Hook::exec('actionAttributeGroupSave', ['id_attribute_group' => $this->id])
```