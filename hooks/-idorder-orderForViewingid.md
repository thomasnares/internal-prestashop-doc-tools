---
menuTitle: -idorder-orderForViewingid
Title: -idorder-orderForViewingid
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/view.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook -idorder-orderForViewingid

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/view.html.twig](src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/view.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayAdminOrderSide', {'id_order': orderForViewing.id}) }}
```