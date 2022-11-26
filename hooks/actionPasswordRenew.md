---
menuTitle: actionPasswordRenew
Title: actionPasswordRenew
hidden: true
hookTitle: 
files:
  - controllers/front/PasswordController.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPasswordRenew

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/PasswordController.php](controllers/front/PasswordController.php)

## Hook call with parameters

```php
Hook::exec('actionPasswordRenew', ['customer' => $customer, 'password' => $password])
```