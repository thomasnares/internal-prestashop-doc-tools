---
menuTitle: actionModuleInstallAfter
Title: actionModuleInstallAfter
hidden: true
hookTitle: actionModuleInstallAfter
files:
  - classes/module/Module.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionModuleInstallAfter

## Information

{{% notice tip %}}
**actionModuleInstallAfter:** 


{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/module/Module.php](classes/module/Module.php)

## Hook call with parameters

```php
Hook::exec('actionModuleInstallAfter', ['object' => $this])
```