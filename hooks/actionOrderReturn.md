---
menuTitle: actionOrderReturn
Title: actionOrderReturn
hidden: true
hookTitle: Returned product
files:
  - controllers/front/OrderFollowController.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionOrderReturn

## Information

{{% notice tip %}}
**Returned product:** 

This hook is displayed when a customer returns a product 
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/OrderFollowController.php](controllers/front/OrderFollowController.php)

## Hook call with parameters

```php
Hook::exec('actionOrderReturn', ['orderReturn' => $orderReturn])
```