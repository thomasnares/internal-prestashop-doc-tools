---
menuTitle: actionPresentModule
Title: actionPresentModule
hidden: true
hookTitle: 
files:
  - src/Adapter/Presenter/Module/ModulePresenter.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPresentModule

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Presenter/Module/ModulePresenter.php](src/Adapter/Presenter/Module/ModulePresenter.php)

## Hook call with parameters

```php
Hook::exec('actionPresentModule',
            ['presentedModule' => &$result]
        )
```