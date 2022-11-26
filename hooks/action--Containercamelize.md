---
menuTitle: action--Containercamelize
Title: action--Containercamelize
hidden: true
hookTitle: 
files:
  - src/Core/Grid/Presenter/GridPresenter.php
locations:
  - frontoffice
type:
  - action
---

# Hook action--Containercamelize

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/Grid/Presenter/GridPresenter.php](src/Core/Grid/Presenter/GridPresenter.php)

## Hook call with parameters

```php
dispatchWithParameters('action' . Container::camelize($definition->getId()) . 'GridPresenterModifier', [
            'presented_grid' => &$presentedGrid,
        ])
```