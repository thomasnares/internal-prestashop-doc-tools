---
menuTitle: actionModuleRegisterHookAfter
Title: actionModuleRegisterHookAfter
hidden: true
hookTitle: 
files:
  - classes/Hook.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionModuleRegisterHookAfter

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Hook.php](classes/Hook.php)

## Hook call with parameters

```php
Hook::exec(
                'actionModuleRegisterHookAfter',
                [
                    'object' => $module_instance,
                    'hook_name' => $hook_name,
                ]
            )
```