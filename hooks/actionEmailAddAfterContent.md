---
menuTitle: actionEmailAddAfterContent
Title: actionEmailAddAfterContent
hidden: true
hookTitle: Add extra content after mail content
files:
  - classes/Mail.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionEmailAddAfterContent

## Information

{{% notice tip %}}
**Add extra content after mail content:** 

This hook is called just after fetching mail template
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
                'actionEmailAddAfterContent',
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