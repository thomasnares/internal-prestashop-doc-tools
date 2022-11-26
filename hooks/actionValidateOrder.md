---
menuTitle: actionValidateOrder
Title: actionValidateOrder
hidden: true
hookTitle: New orders
files:
  - classes/PaymentModule.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionValidateOrder

## Information

{{% notice tip %}}
**New orders:** 


{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/PaymentModule.php](classes/PaymentModule.php)

## Hook call with parameters

```php
Hook::exec('actionValidateOrder', [
                'cart' => $this->context->cart,
                'order' => $order,
                'customer' => $this->context->customer,
                'currency' => $this->context->currency,
                'orderStatus' => $order_status,
            ])
```