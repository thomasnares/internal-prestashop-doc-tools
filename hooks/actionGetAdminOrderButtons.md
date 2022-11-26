---
menuTitle: actionGetAdminOrderButtons
Title: actionGetAdminOrderButtons
hidden: true
hookTitle: Admin Order Buttons
files:
  - src/PrestaShopBundle/Controller/Admin/Sell/Order/OrderController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionGetAdminOrderButtons

## Information

{{% notice tip %}}
**Admin Order Buttons:** 

This hook is used to generate the buttons collection on the order view page (see ActionsBarButtonsCollection)
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/Controller/Admin/Sell/Order/OrderController.php](src/PrestaShopBundle/Controller/Admin/Sell/Order/OrderController.php)

## Hook call with parameters

```php
dispatchHook(
                'actionGetAdminOrderButtons',
                [
                    'controller' => $this,
                    'id_order' => $orderId,
                    'actions_bar_buttons_collection' => $backOfficeOrderButtons,
                ]
            )
```