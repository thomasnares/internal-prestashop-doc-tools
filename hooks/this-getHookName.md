---
menuTitle: this-getHookName
Title: this-getHookName
hidden: true
hookTitle: 
files:
  - src/Core/Kpi/Row/HookableKpiRowFactory.php
locations:
  - frontoffice
type:
  - 
---

# Hook this-getHookName

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Core/Kpi/Row/HookableKpiRowFactory.php](src/Core/Kpi/Row/HookableKpiRowFactory.php)

## Hook call with parameters

```php
dispatchWithParameters($this->getHookName($this->identifier), [
            'kpis' => &$this->kpis,
        ])
```