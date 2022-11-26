---
menuTitle: actionEmailSendBefore
Title: actionEmailSendBefore
hidden: true
hookTitle: Before sending an email
files:
  - classes/Mail.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionEmailSendBefore

## Information

{{% notice tip %}}
**Before sending an email:** 

This hook is used to filter the content or the metadata of an email before sending it or even prevent its sending
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
            'actionEmailSendBefore',
            [
                'idLang' => &$idLang,
                'template' => &$template,
                'subject' => &$subject,
                'templateVars' => &$templateVars,
                'to' => &$to,
                'toName' => &$toName,
                'from' => &$from,
                'fromName' => &$fromName,
                'fileAttachment' => &$fileAttachment,
                'mode_smtp' => &$mode_smtp,
                'templatePath' => &$templatePath,
                'die' => &$die,
                'idShop' => &$idShop,
                'bcc' => &$bcc,
                'replyTo' => &$replyTo,
            ],
            null,
            true
        )
```