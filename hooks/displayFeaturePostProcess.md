---
menuTitle: displayFeaturePostProcess
Title: displayFeaturePostProcess
hidden: true
hookTitle: On post-process in admin feature
files:
  - controllers/admin/AdminFeaturesController.php
locations:
  - backoffice
type:
  - display
---

# Hook displayFeaturePostProcess

## Information

{{% notice tip %}}
**On post-process in admin feature:** 

This hook is called on post-process in admin feature
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/admin/AdminFeaturesController.php](controllers/admin/AdminFeaturesController.php)

## Hook call with parameters

```php
Hook::exec(
                'displayFeaturePostProcess',
                ['errors' => &$this->errors]
            )
```