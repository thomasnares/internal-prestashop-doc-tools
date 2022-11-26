---
menuTitle: actionValidateOrderAfter
Title: actionValidateOrderAfter
hidden: true
hookTitle: After validating an order
files:
  - classes/PaymentModule.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionValidateOrderAfter

## Information

{{% notice tip %}}
**After validating an order:** 

This hook is called after validating an order by core
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/PaymentModule.php](classes/PaymentModule.php)

## Hook call with parameters

```php
Hook::exec(
            'actionValidateOrderAfter',
            [
                'cart' => $this->context->cart,
                'order' => $order ?? null,
                'orders' => $order_list,
                'customer' => $this->context->customer,
                'currency' => $this->context->currency,
                'orderStatus' => new OrderState(isset($order) ? $order->current_state : null),
            ]
        )
```