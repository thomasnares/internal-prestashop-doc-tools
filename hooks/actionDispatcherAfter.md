---
menuTitle: actionDispatcherAfter
Title: actionDispatcherAfter
hidden: true
hookTitle: After dispatch
files:
  - classes/Dispatcher.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionDispatcherAfter

## Information

{{% notice tip %}}
**After dispatch:** 

This hook is called at the end of the dispatch method of the Dispatcher
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Dispatcher.php](classes/Dispatcher.php)

## Hook call with parameters

```php
Hook::exec('actionDispatcherAfter', $params_hook_action_dispatcher)
```