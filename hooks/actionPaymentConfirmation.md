---
menuTitle: actionPaymentConfirmation
Title: actionPaymentConfirmation
hidden: true
hookTitle: Payment confirmation
files:
  - classes/order/OrderHistory.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPaymentConfirmation

## Information

{{% notice tip %}}
**Payment confirmation:** 

This hook displays new elements after the payment is validated
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/order/OrderHistory.php](classes/order/OrderHistory.php)

## Hook call with parameters

```php
Hook::exec('actionPaymentConfirmation', ['id_order' => (int) $order->id], null, false, true, false, $order->id_shop)
```