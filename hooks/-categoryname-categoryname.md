---
menuTitle: -categoryname-categoryname
Title: -categoryname-categoryname
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_manage_empty.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook -categoryname-categoryname

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_manage_empty.html.twig](src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_manage_empty.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayEmptyModuleCategoryExtraMessage', {'category_name': category.name}) }}
```