---
menuTitle: actionMailAlterMessageBeforeSend
Title: actionMailAlterMessageBeforeSend
hidden: true
hookTitle: 
files:
  - classes/Mail.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionMailAlterMessageBeforeSend

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Mail.php](classes/Mail.php)

## Hook call with parameters

```php
Hook::exec('actionMailAlterMessageBeforeSend', [
                'message' => &$message,
            ])
```