---
menuTitle: actionSearch
Title: actionSearch
hidden: true
hookTitle: 
files:
  - src/Adapter/Search/SearchProductSearchProvider.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionSearch

## Information

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Search/SearchProductSearchProvider.php](src/Adapter/Search/SearchProductSearchProvider.php)

## Hook call with parameters

```php
Hook::exec('actionSearch', [
                'searched_query' => $queryString,
                'total' => $count,

                // deprecated since 1.7.x
                'expr' => $queryString,
            ])
```