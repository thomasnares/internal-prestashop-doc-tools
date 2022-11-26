---
menuTitle: validateCustomerFormFields
Title: validateCustomerFormFields
hidden: true
hookTitle: Customer registration form validation
files:
  - classes/form/CustomerForm.php
locations:
  - frontoffice
type:
  - 
---

# Hook validateCustomerFormFields

## Information

{{% notice tip %}}
**Customer registration form validation:** 

This hook is called to a module when it has sent additional fields with additionalCustomerFormFields
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/form/CustomerForm.php](classes/form/CustomerForm.php)

## Hook call with parameters

```php
Hook::exec('validateCustomerFormFields', ['fields' => $formFields], $moduleId, true)
```