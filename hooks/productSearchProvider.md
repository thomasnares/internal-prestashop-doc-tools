---
menuTitle: productSearchProvider
Title: productSearchProvider
hidden: true
hookTitle: 
files:
  - classes/controller/ProductListingFrontController.php
locations:
  - frontoffice
type:
  - 
---

# Hook productSearchProvider

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/ProductListingFrontController.php](classes/controller/ProductListingFrontController.php)

## Hook call with parameters

```php
Hook::exec(
            'productSearchProvider',
            ['query' => $query],
            null,
            true
        )
```