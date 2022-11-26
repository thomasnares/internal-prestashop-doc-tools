---
menuTitle: filterHtmlContent
Title: filterHtmlContent
hidden: true
hookTitle: Filter HTML field before rending a page
files:
  - src/Adapter/Presenter/Object/ObjectPresenter.php
locations:
  - frontoffice
type:
  - 
---

# Hook filterHtmlContent

## Information

{{% notice tip %}}
**Filter HTML field before rending a page:** 

This hook is called just before fetching a page on HTML field
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Presenter/Object/ObjectPresenter.php](src/Adapter/Presenter/Object/ObjectPresenter.php)

## Hook call with parameters

```php
Hook::exec(
                'filterHtmlContent',
                [
                    'type' => $type,
                    'htmlFields' => $htmlFields,
                    'object' => $presentedObject,
                ],
                null,
                false,
                true,
                false,
                null,
                true
            )
```