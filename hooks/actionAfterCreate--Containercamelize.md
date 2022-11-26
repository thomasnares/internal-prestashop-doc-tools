---
menuTitle: actionAfterCreate--Containercamelize
Title: actionAfterCreate--Containercamelize
hidden: true
hookTitle: 
files:
  - src/Core/Form/IdentifiableObject/Handler/FormHandler.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionAfterCreate--Containercamelize

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/Form/IdentifiableObject/Handler/FormHandler.php](src/Core/Form/IdentifiableObject/Handler/FormHandler.php)

## Hook call with parameters

```php
dispatchWithParameters('actionAfterCreate' . Container::camelize($form->getName()) . 'FormHandler', [
            'id' => $id,
            'form_data' => &$data,
        ])
```