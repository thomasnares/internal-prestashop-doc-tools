---
menuTitle: actionCategoryAdd
Title: actionCategoryAdd
hidden: true
hookTitle: Category creation
files:
  - classes/Category.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionCategoryAdd

## Information

{{% notice tip %}}
**Category creation:** 

This hook is displayed when a category is created
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Category.php](classes/Category.php)

## Hook call with parameters

```php
Hook::exec('actionCategoryAdd', ['category' => $this])
```