---
menuTitle: actionExportGDPRData
Title: actionExportGDPRData
hidden: true
hookTitle: 
files:
  - modules/psgdpr/psgdpr.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionExportGDPRData

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/modules/psgdpr/psgdpr.php](modules/psgdpr/psgdpr.php)

## Hook call with parameters

```php
Hook::exec('actionExportGDPRData', $customer, $module['id_module'])
```