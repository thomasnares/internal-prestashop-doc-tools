---
menuTitle: filterCmsContent
Title: filterCmsContent
hidden: true
hookTitle: Filter the content page
files:
  - controllers/front/CmsController.php
locations:
  - frontoffice
type:
  - 
---

# Hook filterCmsContent

## Information

{{% notice tip %}}
**Filter the content page:** 

This hook is called just before fetching content page
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
                'filterCmsContent',
                ['object' => $cmsVar],
                $id_module = null,
                $array_return = false,
                $check_exceptions = true,
                $use_push = false,
                $id_shop = null,
                $chain = true
            )
```