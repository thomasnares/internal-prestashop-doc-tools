---
menuTitle: productproduct-typeunitpricecapturesmartycaptureproductPriceBlockstriptagstrim
Title: productproduct-typeunitpricecapturesmartycaptureproductPriceBlockstriptagstrim
hidden: true
hookTitle: 
files:
  - mails/_partials/order_conf_product_list.txt
locations:
  - frontoffice
type:
  - 
---

# Hook productproduct-typeunitpricecapturesmartycaptureproductPriceBlockstriptagstrim

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/mails/_partials/order_conf_product_list.txt](mails/_partials/order_conf_product_list.txt)

## Hook call with parameters

```php
{hook h='displayProductPriceBlock' product=$product type="unit_price"}{/capture}{$smarty.capture.productPriceBlock|strip_tags|trim}
```