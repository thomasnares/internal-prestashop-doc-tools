---
menuTitle: addWebserviceResources
Title: addWebserviceResources
hidden: true
hookTitle: Add extra webservice resource
files:
  - classes/webservice/WebserviceRequest.php
locations:
  - frontoffice
type:
  - 
---

# Hook addWebserviceResources

## Information

{{% notice tip %}}
**Add extra webservice resource:** 

This hook is called when webservice resources list in webservice controller
{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/classes/webservice/WebserviceRequest.php](classes/webservice/WebserviceRequest.php)

## Hook call with parameters

```php
Hook::exec('addWebserviceResources', ['resources' => $resources], null, true, false)
```