---
menuTitle: selfDISPATCHERAFTERACTION
Title: selfDISPATCHERAFTERACTION
hidden: true
hookTitle: 
files:
  - src/PrestaShopBundle/EventListener/ActionDispatcherLegacyHooksSubscriber.php
locations:
  - frontoffice
type:
  - 
---

# Hook selfDISPATCHERAFTERACTION

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - 

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/PrestaShopBundle/EventListener/ActionDispatcherLegacyHooksSubscriber.php](src/PrestaShopBundle/EventListener/ActionDispatcherLegacyHooksSubscriber.php)

## Hook call with parameters

```php
dispatchWithParameters(self::DISPATCHER_AFTER_ACTION, [
                'controller_type' => $requestAttributes->get('controller_type'),
                'controller_class' => $requestAttributes->get('controller_name'),
                'is_module' => 0,
            ])
```