---
menuTitle: actionPaymentCCAdd
Title: actionPaymentCCAdd
hidden: true
hookTitle: Payment CC added
files:
  - classes/order/OrderPayment.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPaymentCCAdd

## Information

{{% notice tip %}}
**Payment CC added:** 


{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/order/OrderPayment.php](classes/order/OrderPayment.php)

## Hook call with parameters

```php
Hook::exec('actionPaymentCCAdd', ['paymentCC' => $this])
```