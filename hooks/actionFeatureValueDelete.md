---
menuTitle: actionFeatureValueDelete
Title: actionFeatureValueDelete
hidden: true
hookTitle: Deleting attributes' features' values
files:
  - classes/FeatureValue.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionFeatureValueDelete

## Information

{{% notice tip %}}
**Deleting attributes' features' values:** 

This hook is called while deleting an attributes features value
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/FeatureValue.php](classes/FeatureValue.php)

## Hook call with parameters

```php
Hook::exec('actionFeatureValueDelete', ['id_feature_value' => $this->id])
```