---
menuTitle: actionObjectAddBefore
Title: actionObjectAddBefore
hidden: true
hookTitle: 
files:
  - classes/ObjectModel.php
locations:
  - backoffice
  - frontoffice
type:
  - action
---

# Hook actionObjectAddBefore

## Information

Hook locations: 
  - backoffice
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/ObjectModel.php](classes/ObjectModel.php)

## Hook call with parameters

```php
Hook::exec('actionObjectAddBefore', ['object' => $this])
```