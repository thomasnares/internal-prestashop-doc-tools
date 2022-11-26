---
menuTitle: filterProductContent
Title: filterProductContent
hidden: true
hookTitle: Filter the content page product
files:
  - controllers/front/ProductController.php
locations:
  - frontoffice
type:
  - 
---

# Hook filterProductContent

## Information

{{% notice tip %}}
**Filter the content page product:** 

This hook is called just before fetching content page product
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/ProductController.php](controllers/front/ProductController.php)

## Hook call with parameters

```php
Hook::exec(
                'filterProductContent',
                ['object' => $product_for_template],
                null,
                false,
                true,
                false,
                null,
                true
            )
```