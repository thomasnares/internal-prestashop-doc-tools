---
menuTitle: selfHOOKADDURLS
Title: selfHOOKADDURLS
hidden: true
hookTitle: 
files:
  - modules/gsitemap/gsitemap.php
locations:
  - frontoffice
type:
  - 
---

# Hook selfHOOKADDURLS

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/modules/gsitemap/gsitemap.php](modules/gsitemap/gsitemap.php)

## Hook call with parameters

```php
Hook::exec(self::HOOK_ADD_URLS, array(
            'lang' => $lang,
        ), null, true)
```