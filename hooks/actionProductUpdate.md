---
menuTitle: actionProductUpdate
Title: actionProductUpdate
hidden: true
hookTitle: Product update
files:
  - src/Adapter/Product/AdminProductWrapper.php
locations:
  - backoffice
type:
  - action
---

# Hook actionProductUpdate

## Information

{{% notice tip %}}
**Product update:** 

This hook is displayed after a product has been updated
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Product/AdminProductWrapper.php](src/Adapter/Product/AdminProductWrapper.php)

## Hook call with parameters

```php
Hook::exec('actionProductUpdate', ['id_product' => (int) $product->id, 'product' => $product])
```