---
menuTitle: actionCategoryUpdate
Title: actionCategoryUpdate
hidden: true
hookTitle: Category modification
files:
  - controllers/admin/AdminProductsController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionCategoryUpdate

## Information

{{% notice tip %}}
**Category modification:** 

This hook is displayed when a category is modified
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/admin/AdminProductsController.php](controllers/admin/AdminProductsController.php)

## Hook call with parameters

```php
Hook::exec('actionCategoryUpdate', ['category' => $category])
```