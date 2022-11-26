---
menuTitle: -orderid-orderId
Title: -orderid-orderId
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/preview.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook -orderid-orderId

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/preview.html.twig](src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/preview.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayOrderPreview', {'order_id': orderId}) }}
```