---
menuTitle: actionAdminDeleteBefore
Title: actionAdminDeleteBefore
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/Controller/Admin/ProductController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionAdminDeleteBefore

## Information

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/ProductController.php](src/PrestaShopBundle/Controller/Admin/ProductController.php)

## Hook call with parameters

```php
dispatchWithParameters(
                        'actionAdminDeleteBefore',
                        $hookEventParameters
                    )
```