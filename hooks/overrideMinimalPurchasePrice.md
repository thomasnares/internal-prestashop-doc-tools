---
menuTitle: overrideMinimalPurchasePrice
Title: overrideMinimalPurchasePrice
hidden: true
hookTitle: 
files:
  - src/Adapter/Presenter/Cart/CartPresenter.php
locations:
  - frontoffice
type:
  - 
---

# Hook overrideMinimalPurchasePrice

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Presenter/Cart/CartPresenter.php](src/Adapter/Presenter/Cart/CartPresenter.php)

## Hook call with parameters

```php
Hook::exec('overrideMinimalPurchasePrice', [
            'minimalPurchase' => &$minimalPurchase,
        ])
```