---
menuTitle: actionObjectProductCommentValidateAfter
Title: actionObjectProductCommentValidateAfter
hidden: true
hookTitle: 
files:
  - modules/productcomments/ProductComment.php
locations:
  - backoffice
  - frontoffice
type:
  - action
---

# Hook actionObjectProductCommentValidateAfter

## Information

Hook locations: 
  - backoffice
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/modules/productcomments/ProductComment.php](modules/productcomments/ProductComment.php)

## Hook call with parameters

```php
Hook::exec('actionObjectProductCommentValidateAfter', ['object' => $this])
```