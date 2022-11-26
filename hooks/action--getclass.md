---
menuTitle: action--getclass
Title: action--getclass
hidden: true
hookTitle: 
files:
  - classes/controller/AdminController.php
locations:
  - backoffice
type:
  - action
---

# Hook action--getclass

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/controller/AdminController.php](classes/controller/AdminController.php)

## Hook call with parameters

```php
Hook::exec('action' . get_class($this) . ucfirst($this->action) . 'Before', ['controller' => $this])
```