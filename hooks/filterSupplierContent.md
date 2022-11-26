---
menuTitle: filterSupplierContent
Title: filterSupplierContent
hidden: true
hookTitle: Filter the content page supplier
files:
  - controllers/front/listing/SupplierController.php
locations:
  - frontoffice
type:
  - 
---

# Hook filterSupplierContent

## Information

{{% notice tip %}}
**Filter the content page supplier:** 

This hook is called just before fetching content page supplier
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/listing/SupplierController.php](controllers/front/listing/SupplierController.php)

## Hook call with parameters

```php
Hook::exec(
            'filterSupplierContent',
            ['object' => $supplierVar],
            $id_module = null,
            $array_return = false,
            $check_exceptions = true,
            $use_push = false,
            $id_shop = null,
            $chain = true
        )
```