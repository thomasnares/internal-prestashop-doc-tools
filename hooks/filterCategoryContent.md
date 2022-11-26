---
menuTitle: filterCategoryContent
Title: filterCategoryContent
hidden: true
hookTitle: Filter the content page category
files:
  - controllers/front/listing/CategoryController.php
locations:
  - frontoffice
type:
  - 
---

# Hook filterCategoryContent

## Information

{{% notice tip %}}
**Filter the content page category:** 

This hook is called just before fetching content page category
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/listing/CategoryController.php](controllers/front/listing/CategoryController.php)

## Hook call with parameters

```php
Hook::exec(
            'filterCategoryContent',
            ['object' => $categoryVar],
            $id_module = null,
            $array_return = false,
            $check_exceptions = true,
            $use_push = false,
            $id_shop = null,
            $chain = true
        )
```