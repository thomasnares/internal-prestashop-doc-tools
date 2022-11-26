---
menuTitle: --currentthemename-currentlyUsedThemegetname-
Title: --currentthemename-currentlyUsedThemegetname-
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook --currentthemename-currentlyUsedThemegetname-

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig](src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/index.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayAdminThemesListAfter', { 'current_theme_name': currentlyUsedTheme.get('name') }) }}
```