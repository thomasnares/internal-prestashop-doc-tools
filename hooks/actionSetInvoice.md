---
menuTitle: actionSetInvoice
Title: actionSetInvoice
hidden: true
hookTitle: 
files:
  - classes/order/Order.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionSetInvoice

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/order/Order.php](classes/order/Order.php)

## Hook call with parameters

```php
Hook::exec('actionSetInvoice', [
                    get_class($this) => $this,
                    get_class($order_invoice) => $order_invoice,
                    'use_existing_payment' => (bool) $use_existing_payment,
                ])
```