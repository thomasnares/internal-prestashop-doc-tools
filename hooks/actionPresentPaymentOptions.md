---
menuTitle: actionPresentPaymentOptions
Title: actionPresentPaymentOptions
hidden: true
hookTitle: Payment options Presenter
files:
  - classes/checkout/PaymentOptionsFinder.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPresentPaymentOptions

## Information

{{% notice tip %}}
**Payment options Presenter:** 

This hook is called before payment options are presented
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/checkout/PaymentOptionsFinder.php](classes/checkout/PaymentOptionsFinder.php)

## Hook call with parameters

```php
Hook::exec('actionPresentPaymentOptions',
            ['paymentOptions' => &$paymentOptions]
        )
```