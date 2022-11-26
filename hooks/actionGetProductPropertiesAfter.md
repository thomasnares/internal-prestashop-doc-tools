---
menuTitle: actionGetProductPropertiesAfter
Title: actionGetProductPropertiesAfter
hidden: true
hookTitle: 
files:
  - classes/Product.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionGetProductPropertiesAfter

## Information

{{% notice warning %}}
**Deprecated:** Since 1.7.8.0
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Product.php](classes/Product.php)

## Hook call with parameters

```php
Hook::exec('actionGetProductPropertiesAfter', [
            'id_lang' => $id_lang,
            'product' => &$row,
            'context' => $context,
        ])
```