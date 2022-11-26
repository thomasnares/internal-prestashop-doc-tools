---
menuTitle: -idcustomer-customerInformationcustomerIdvalue
Title: -idcustomer-customerInformationcustomerIdvalue
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/view.html.twig
locations:
  - backoffice
type:
  - 
---

# Hook -idcustomer-customerInformationcustomerIdvalue

## Information

Hook locations: 
  - backoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/view.html.twig](src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/view.html.twig)

## Hook call with parameters

```php
{{ renderhook('displayAdminCustomers', {'id_customer': customerInformation.customerId.value}) }}
```