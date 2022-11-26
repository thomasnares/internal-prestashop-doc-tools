---
menuTitle: actionObjectProductInCartDeleteBefore
Title: actionObjectProductInCartDeleteBefore
hidden: true
hookTitle: Cart product removal
files:
  - controllers/front/CartController.php
locations:
  - backoffice
  - frontoffice
type:
  - action
---

# Hook actionObjectProductInCartDeleteBefore

## Information

{{% notice tip %}}
**Cart product removal:** 

This hook is called before a product is removed from a cart
{{% /notice %}}

Hook locations: 
  - backoffice
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/CartController.php](controllers/front/CartController.php)

## Hook call with parameters

```php
Hook::exec('actionObjectProductInCartDeleteBefore', $data, null, true)
```