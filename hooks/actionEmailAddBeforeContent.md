---
menuTitle: actionEmailAddBeforeContent
Title: actionEmailAddBeforeContent
hidden: true
hookTitle: Add extra content before mail content
files:
  - classes/Mail.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionEmailAddBeforeContent

## Information

{{% notice tip %}}
**Add extra content before mail content:** 

This hook is called just before fetching mail template
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Mail.php](classes/Mail.php)

## Hook call with parameters

```php
Hook::exec(
                'actionEmailAddBeforeContent',
                [
                    'template' => $template,
                    'template_html' => &$templateHtml,
                    'template_txt' => &$templateTxt,
                    'id_lang' => (int) $idLang,
                ],
                null,
                true
            )
```