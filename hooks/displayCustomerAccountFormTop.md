---
menuTitle: displayCustomerAccountFormTop
Title: displayCustomerAccountFormTop
hidden: true
hookTitle: Block above the form for create an account
files:
  - controllers/front/RegistrationController.php
locations:
  - frontoffice
type:
  - display
---

# Hook displayCustomerAccountFormTop

## Information

{{% notice tip %}}
**Block above the form for create an account:** 

This hook is displayed above the customer's account creation form
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/RegistrationController.php](controllers/front/RegistrationController.php)

## Hook call with parameters

```php
Hook::exec('displayCustomerAccountFormTop')
```