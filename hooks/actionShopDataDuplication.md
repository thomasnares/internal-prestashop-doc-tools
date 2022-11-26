---
menuTitle: actionShopDataDuplication
Title: actionShopDataDuplication
hidden: true
hookTitle: 
files:
  - classes/shop/Shop.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionShopDataDuplication

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/shop/Shop.php](classes/shop/Shop.php)

## Hook call with parameters

```php
Hook::exec('actionShopDataDuplication', [
                        'old_id_shop' => (int) $old_id,
                        'new_id_shop' => (int) $this->id,
                    ], $m['id_module'])
```