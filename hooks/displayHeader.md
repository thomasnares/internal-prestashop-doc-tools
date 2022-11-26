---
menuTitle: displayHeader
Title: displayHeader
hidden: true
hookTitle: Pages html head section
files:
  - classes/controller/FrontController.php
locations:
  - frontoffice
type:
  - display
---

# Hook displayHeader

## Information

{{% notice tip %}}
**Pages html head section:** 

This hook adds additional elements in the head section of your pages (head section of html)
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/FrontController.php](classes/controller/FrontController.php)

## Hook call with parameters

```php
Hook::exec('displayHeader')
```