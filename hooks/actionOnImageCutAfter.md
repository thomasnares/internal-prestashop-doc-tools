---
menuTitle: actionOnImageCutAfter
Title: actionOnImageCutAfter
hidden: true
hookTitle: 
files:
  - classes/ImageManager.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionOnImageCutAfter

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/ImageManager.php](classes/ImageManager.php)

## Hook call with parameters

```php
Hook::exec('actionOnImageCutAfter', ['dst_file' => $dstFile, 'file_type' => $fileType])
```