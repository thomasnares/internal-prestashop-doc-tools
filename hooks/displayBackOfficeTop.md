---
menuTitle: displayBackOfficeTop
Title: displayBackOfficeTop
hidden: true
hookTitle: Administration panel hover the tabs
files:
  - classes/controller/AdminController.php
locations:
  - backoffice
type:
  - display
---

# Hook displayBackOfficeTop

## Information

{{% notice tip %}}
**Administration panel hover the tabs:** 

This hook is displayed on the roll hover of the tabs within the admin panel
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/AdminController.php](classes/controller/AdminController.php)

## Hook call with parameters

```php
Hook::exec('displayBackOfficeTop')
```