---
menuTitle: filterCmsCategoryContent
Title: filterCmsCategoryContent
hidden: true
hookTitle: Filter the content page category
files:
  - controllers/front/CmsController.php
locations:
  - frontoffice
type:
  - 
---

# Hook filterCmsCategoryContent

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
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/CmsController.php](controllers/front/CmsController.php)

## Hook call with parameters

```php
Hook::exec(
                'filterCmsCategoryContent',
                ['object' => $cmsCategoryVar],
                $id_module = null,
                $array_return = false,
                $check_exceptions = true,
                $use_push = false,
                $id_shop = null,
                $chain = true
            )
```