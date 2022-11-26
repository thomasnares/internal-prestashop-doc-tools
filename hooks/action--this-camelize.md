---
menuTitle: action--this-camelize
Title: action--this-camelize
hidden: true
hookTitle: 
files:
  - src/Core/Form/IdentifiableObject/Builder/FormBuilder.php
locations:
  - frontoffice
type:
  - action
---

# Hook action--this-camelize

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/Form/IdentifiableObject/Builder/FormBuilder.php](src/Core/Form/IdentifiableObject/Builder/FormBuilder.php)

## Hook call with parameters

```php
dispatchWithParameters(
            'action' . $this->camelize($this->getFormName()) . 'FormDataProviderDefaultData',
            [
                'data' => &$data,
                'options' => &$options,
            ]
        )
```