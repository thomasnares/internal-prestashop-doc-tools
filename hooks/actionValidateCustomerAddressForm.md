---
menuTitle: actionValidateCustomerAddressForm
Title: actionValidateCustomerAddressForm
hidden: true
hookTitle: Customer address form validation
files:
  - classes/form/CustomerAddressForm.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionValidateCustomerAddressForm

## Information

{{% notice tip %}}
**Customer address form validation:** 

This hook is called when a customer submit its address form
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/form/CustomerAddressForm.php](classes/form/CustomerAddressForm.php)

## Hook call with parameters

```php
Hook::exec('actionValidateCustomerAddressForm', ['form' => $this])
```