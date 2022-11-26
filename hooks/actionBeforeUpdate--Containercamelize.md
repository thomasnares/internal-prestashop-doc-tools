---
menuTitle: actionBeforeUpdate--Containercamelize
Title: actionBeforeUpdate--Containercamelize
hidden: true
hookTitle: 
files:
  - src/Core/Form/IdentifiableObject/Handler/FormHandler.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionBeforeUpdate--Containercamelize

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/Form/IdentifiableObject/Handler/FormHandler.php](src/Core/Form/IdentifiableObject/Handler/FormHandler.php)

## Hook call with parameters

```php
dispatchWithParameters('actionBeforeUpdate' . Container::camelize($form->getName()) . 'FormHandler', [
            'form_data' => &$data,
            'id' => $id,
        ])
```