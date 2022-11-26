---
menuTitle: actionPDFInvoiceRender
Title: actionPDFInvoiceRender
hidden: true
hookTitle: 
files:
  - src/Adapter/PDF/OrderInvoicePdfGenerator.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionPDFInvoiceRender

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/PDF/OrderInvoicePdfGenerator.php](src/Adapter/PDF/OrderInvoicePdfGenerator.php)

## Hook call with parameters

```php
Hook::exec('actionPDFInvoiceRender', ['order_invoice_list' => $order_invoice_list])
```