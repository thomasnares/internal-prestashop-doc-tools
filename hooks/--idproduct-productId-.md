---
menuTitle: --idproduct-productId-
Title: --idproduct-productId-
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/pricing.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook --idproduct-productId-

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/pricing.html.twig](src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/pricing.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayAdminProductsPriceStepBottom', { 'id_product': productId }) }}
```