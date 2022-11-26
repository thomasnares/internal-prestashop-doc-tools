---
menuTitle: displayOrderConfirmation
Title: displayOrderConfirmation
hidden: true
hookTitle: Order confirmation page
files:
  - controllers/front/OrderConfirmationController.php
locations:
  - frontoffice
type:
  - display
---

# Hook displayOrderConfirmation

## Information

{{% notice tip %}}
**Order confirmation page:** 

This hook is called within an order's confirmation page
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - display

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/front/OrderConfirmationController.php](controllers/front/OrderConfirmationController.php)

## Hook call with parameters

```php
Hook::exec('displayOrderConfirmation', ['order' => $order])
```