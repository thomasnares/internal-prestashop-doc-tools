---
menuTitle: actionFeatureSave
Title: actionFeatureSave
hidden: true
hookTitle: Saving attributes' features
files:
  - classes/Feature.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionFeatureSave

## Information

{{% notice tip %}}
**Saving attributes' features:** 

This hook is called while saving an attributes features
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Feature.php](classes/Feature.php)

## Hook call with parameters

```php
Hook::exec('actionFeatureSave', ['id_feature' => $this->id])
```