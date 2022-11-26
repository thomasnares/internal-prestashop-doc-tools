---
menuTitle: actionGetIDZoneByAddressID
Title: actionGetIDZoneByAddressID
hidden: true
hookTitle: 
files:
  - classes/Address.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionGetIDZoneByAddressID

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Address.php](classes/Address.php)

## Hook call with parameters

```php
Hook::exec('actionGetIDZoneByAddressID', ['id_address' => $id_address])
```