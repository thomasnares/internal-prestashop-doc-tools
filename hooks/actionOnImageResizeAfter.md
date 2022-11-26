---
menuTitle: actionOnImageResizeAfter
Title: actionOnImageResizeAfter
hidden: true
hookTitle: 
files:
  - classes/ImageManager.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionOnImageResizeAfter

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/ImageManager.php](classes/ImageManager.php)

## Hook call with parameters

```php
Hook::exec('actionOnImageResizeAfter', ['dst_file' => $destinationFile, 'file_type' => $fileType])
```