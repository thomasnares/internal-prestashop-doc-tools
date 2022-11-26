---
menuTitle: actionProductAdd
Title: actionProductAdd
hidden: true
hookTitle: Product creation
files:
  - src/Adapter/Product/ProductDuplicator.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionProductAdd

## Information

{{% notice tip %}}
**Product creation:** 

This hook is displayed after a product is created
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Product/ProductDuplicator.php](src/Adapter/Product/ProductDuplicator.php)

## Hook call with parameters

```php
dispatchWithParameters(
            'actionProductAdd',
            ['id_product_old' => $oldProductId, 'id_product' => $newProductId, 'product' => $newProduct]
        )
```