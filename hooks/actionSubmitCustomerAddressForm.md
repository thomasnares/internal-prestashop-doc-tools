---
menuTitle: actionSubmitCustomerAddressForm
Title: actionSubmitCustomerAddressForm
hidden: true
hookTitle: 
files:
  - classes/form/CustomerAddressForm.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionSubmitCustomerAddressForm

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/form/CustomerAddressForm.php](classes/form/CustomerAddressForm.php)

## Hook call with parameters

```php
Hook::exec('actionSubmitCustomerAddressForm', ['address' => &$address])
```