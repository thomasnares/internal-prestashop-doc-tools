---
menuTitle: actionHtaccessCreate
Title: actionHtaccessCreate
hidden: true
hookTitle: After htaccess creation
files:
  - classes/Tools.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionHtaccessCreate

## Information

{{% notice tip %}}
**After htaccess creation:** 

This hook is displayed after the htaccess creation
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Tools.php](classes/Tools.php)

## Hook call with parameters

```php
Hook::exec('actionHtaccessCreate')
```