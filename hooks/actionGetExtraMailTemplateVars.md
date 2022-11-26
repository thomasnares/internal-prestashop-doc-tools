---
menuTitle: actionGetExtraMailTemplateVars
Title: actionGetExtraMailTemplateVars
hidden: true
hookTitle: 
files:
  - classes/Mail.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionGetExtraMailTemplateVars

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/Mail.php](classes/Mail.php)

## Hook call with parameters

```php
Hook::exec(
                'actionGetExtraMailTemplateVars',
                [
                    'template' => $template,
                    'template_vars' => $templateVars,
                    'extra_template_vars' => &$extraTemplateVars,
                    'id_lang' => (int) $idLang,
                ],
                null,
                true
            )
```