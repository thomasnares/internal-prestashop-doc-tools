---
menuTitle: -------grid-grid------legacycontroller-apprequestattributesgetlegacycontroller------controller-apprequestattributesgetcontroller----
Title: -------grid-grid------legacycontroller-apprequestattributesgetlegacycontroller------controller-apprequestattributesgetcontroller----
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook -------grid-grid------legacycontroller-apprequestattributesgetlegacycontroller------controller-apprequestattributesgetcontroller----

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig](src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayAdminGridTableAfter', {
      'grid': grid,
      'legacy_controller': app.request.attributes.get('_legacy_controller'),
      'controller': app.request.attributes.get('_controller')
    })
}}
```