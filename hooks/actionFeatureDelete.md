---
menuTitle: actionFeatureDelete
Title: actionFeatureDelete
hidden: true
hookTitle: Deleting attributes' features
files:
  - classes/Feature.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionFeatureDelete

## Information

{{% notice tip %}}
**Deleting attributes' features:** 

This hook is called while deleting an attributes features
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Feature.php](classes/Feature.php)

## Hook call with parameters

```php
Hook::exec('actionFeatureDelete', ['id_feature' => $this->id])
```