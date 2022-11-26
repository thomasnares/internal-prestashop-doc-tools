---
menuTitle: actionGetAdminToolbarButtons
Title: actionGetAdminToolbarButtons
hidden: true
hookTitle: Allows to add buttons in any toolbar in the back office
files:
  - classes/controller/AdminController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionGetAdminToolbarButtons

## Information

{{% notice tip %}}
**Allows to add buttons in any toolbar in the back office:** 

This hook allows you to define descriptions of buttons to add in any toolbar of the back office
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/AdminController.php](classes/controller/AdminController.php)

## Hook call with parameters

```php
Hook::exec('actionGetAdminToolbarButtons', [
                'controller' => $this,
                'toolbar_extra_buttons_collection' => &$toolbarButtonsCollection,
            ])
```