---
menuTitle: additionalCustomerAddressFields
Title: additionalCustomerAddressFields
hidden: true
hookTitle: Add fields to the Customer address form
files:
  - classes/form/CustomerAddressFormatter.php
locations:
  - frontoffice
type:
  - 
---

# Hook additionalCustomerAddressFields

## Information

{{% notice tip %}}
**Add fields to the Customer address form:** 

This hook returns an array of FormFields to add them to the customer address registration form
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/form/CustomerAddressFormatter.php](classes/form/CustomerAddressFormatter.php)

## Hook call with parameters

```php
Hook::exec('additionalCustomerAddressFields', ['fields' => &$format], null, true)
```