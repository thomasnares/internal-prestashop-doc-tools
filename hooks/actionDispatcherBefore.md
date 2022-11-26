---
menuTitle: actionDispatcherBefore
Title: actionDispatcherBefore
hidden: true
hookTitle: Before dispatch
files:
  - classes/Dispatcher.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionDispatcherBefore

## Information

{{% notice tip %}}
**Before dispatch:** 

This hook is called at the beginning of the dispatch method of the Dispatcher
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Dispatcher.php](classes/Dispatcher.php)

## Hook call with parameters

```php
Hook::exec('actionDispatcherBefore', ['controller_type' => $this->front_controller])
```