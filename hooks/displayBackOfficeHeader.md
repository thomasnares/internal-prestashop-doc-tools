---
menuTitle: displayBackOfficeHeader
Title: displayBackOfficeHeader
hidden: true
hookTitle: Administration panel header
files:
  - classes/controller/AdminController.php
locations:
  - backoffice
type:
  - display
---

# Hook displayBackOfficeHeader

## Information

{{% notice tip %}}
**Administration panel header:** 

This hook is displayed in the header of the admin panel
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/AdminController.php](classes/controller/AdminController.php)

## Hook call with parameters

```php
Hook::exec('displayBackOfficeHeader')
```