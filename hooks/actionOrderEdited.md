---
menuTitle: actionOrderEdited
Title: actionOrderEdited
hidden: true
hookTitle: Order edited
files:
  - src/Adapter/Order/CommandHandler/UpdateProductInOrderHandler.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionOrderEdited

## Information

{{% notice tip %}}
**Order edited:** 

This hook is called when an order is edited
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Order/CommandHandler/UpdateProductInOrderHandler.php](src/Adapter/Order/CommandHandler/UpdateProductInOrderHandler.php)

## Hook call with parameters

```php
Hook::exec('actionOrderEdited', ['order' => $order])
```