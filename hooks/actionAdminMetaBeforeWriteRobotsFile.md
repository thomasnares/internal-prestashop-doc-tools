---
menuTitle: actionAdminMetaBeforeWriteRobotsFile
Title: actionAdminMetaBeforeWriteRobotsFile
hidden: true
hookTitle: 
files:
  - classes/Tools.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminMetaBeforeWriteRobotsFile

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Tools.php](classes/Tools.php)

## Hook call with parameters

```php
Hook::exec('actionAdminMetaBeforeWriteRobotsFile', [
                'rb_data' => &$robots_content,
            ])
```