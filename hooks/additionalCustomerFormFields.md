---
menuTitle: additionalCustomerFormFields
Title: additionalCustomerFormFields
hidden: true
hookTitle: Add fields to the Customer form
files:
  - classes/form/CustomerFormatter.php
locations:
  - frontoffice
type:
  - 
---

# Hook additionalCustomerFormFields

## Information

{{% notice tip %}}
**Add fields to the Customer form:** 

This hook returns an array of FormFields to add them to the customer registration form
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/form/CustomerFormatter.php](classes/form/CustomerFormatter.php)

## Hook call with parameters

```php
Hook::exec('additionalCustomerFormFields', ['fields' => &$format], null, true)
```