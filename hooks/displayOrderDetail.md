---
menuTitle: displayOrderDetail
Title: displayOrderDetail
hidden: true
hookTitle: Order detail
files:
  - controllers/front/OrderDetailController.php
locations:
  - frontoffice
type:
  - display
---

# Hook displayOrderDetail

## Information

{{% notice tip %}}
**Order detail:** 

This hook is displayed within the order's details in Front Office
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/OrderDetailController.php](controllers/front/OrderDetailController.php)

## Hook call with parameters

```php
Hook::exec('displayOrderDetail', ['order' => $order])
```