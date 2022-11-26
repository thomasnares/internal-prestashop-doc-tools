---
menuTitle: actionAdminProductsListingResultsModifier
Title: actionAdminProductsListingResultsModifier
hidden: true
hookTitle: 
files:
  - src/Adapter/Product/AdminProductDataProvider.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminProductsListingResultsModifier

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Product/AdminProductDataProvider.php](src/Adapter/Product/AdminProductDataProvider.php)

## Hook call with parameters

```php
Hook::exec('actionAdminProductsListingResultsModifier', [
            '_ps_version' => AppKernel::VERSION,
            'products' => &$products,
            'total' => $total,
        ])
```