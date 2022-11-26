---
menuTitle: --idproduct-formvarsvalueidproduct-idproductattribute-formvarsvalueidproductattribute-
Title: --idproduct-formvarsvalueidproduct-idproductattribute-formvarsvalueidproductattribute-
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combination.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook --idproduct-formvarsvalueidproduct-idproductattribute-formvarsvalueidproductattribute-

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combination.html.twig](src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combination.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayAdminProductsCombinationBottom', { 'id_product': form.vars.value.id_product, 'id_product_attribute': form.vars.value.id_product_attribute }) }}
```