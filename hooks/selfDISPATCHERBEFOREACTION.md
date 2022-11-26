---
menuTitle: selfDISPATCHERBEFOREACTION
Title: selfDISPATCHERBEFOREACTION
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/EventListener/ActionDispatcherLegacyHooksSubscriber.php
locations:
  - frontoffice
type:
  - 
---

# Hook selfDISPATCHERBEFOREACTION

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/EventListener/ActionDispatcherLegacyHooksSubscriber.php](src/PrestaShopBundle/EventListener/ActionDispatcherLegacyHooksSubscriber.php)

## Hook call with parameters

```php
dispatchWithParameters(self::DISPATCHER_BEFORE_ACTION, [
            'controller_type' => $controllerType,
        ])
```