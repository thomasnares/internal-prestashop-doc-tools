---
menuTitle: actionDeleteGDPRCustomer
Title: actionDeleteGDPRCustomer
hidden: true
hookTitle: 
files:
  - modules/psgdpr/psgdpr.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionDeleteGDPRCustomer

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/modules/psgdpr/psgdpr.php](modules/psgdpr/psgdpr.php)

## Hook call with parameters

```php
Hook::exec('actionDeleteGDPRCustomer', $customer, $module['id_module'])
```