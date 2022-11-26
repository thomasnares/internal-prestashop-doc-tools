---
menuTitle: actionOrderSlipAdd
Title: actionOrderSlipAdd
hidden: true
hookTitle: Order slip creation
files:
  - src/Adapter/Order/Refund/OrderSlipCreator.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionOrderSlipAdd

## Information

{{% notice tip %}}
**Order slip creation:** 

This hook is called when a new credit slip is added regarding client order
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Order/Refund/OrderSlipCreator.php](src/Adapter/Order/Refund/OrderSlipCreator.php)

## Hook call with parameters

```php
Hook::exec('actionOrderSlipAdd', [
                'order' => $order,
                'productList' => $orderRefundSummary->getProductRefunds(),
                'qtyList' => $fullQuantityList,
            ], null, false, true, false, $order->id_shop)
```