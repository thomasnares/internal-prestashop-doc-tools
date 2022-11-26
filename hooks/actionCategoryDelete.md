---
menuTitle: actionCategoryDelete
Title: actionCategoryDelete
hidden: true
hookTitle: Category deletion
files:
  - classes/Category.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionCategoryDelete

## Information

{{% notice tip %}}
**Category deletion:** 

This hook is displayed when a category is deleted
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Category.php](classes/Category.php)

## Hook call with parameters

```php
Hook::exec('actionCategoryDelete', ['category' => $this, 'deleted_children' => $deletedChildren])
```