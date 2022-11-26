---
menuTitle: actionPresentProductListing
Title: actionPresentProductListing
hidden: true
hookTitle: Product Listing Presenter
files:
  - src/Adapter/Presenter/Product/ProductListingPresenter.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPresentProductListing

## Information

{{% notice tip %}}
**Product Listing Presenter:** 

This hook is called before a product listing is presented
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Presenter/Product/ProductListingPresenter.php](src/Adapter/Presenter/Product/ProductListingPresenter.php)

## Hook call with parameters

```php
Hook::exec('actionPresentProductListing',
            ['presentedProduct' => &$productListingLazyArray]
        )
```