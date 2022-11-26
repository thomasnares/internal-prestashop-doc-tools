---
menuTitle: actionGetAlternativeSearchPanels
Title: actionGetAlternativeSearchPanels
hidden: true
hookTitle: Additional search panel
files:
  - controllers/admin/AdminSearchController.php
locations:
  - backoffice
type:
  - action
---

# Hook actionGetAlternativeSearchPanels

## Information

{{% notice tip %}}
**Additional search panel:** 

This hook allows to add an additional search panel for external providers in PrestaShop back office
{{% /notice %}}

Hook locations: 
  - backoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/controllers/admin/AdminSearchController.php](controllers/admin/AdminSearchController.php)

## Hook call with parameters

```php
Hook::exec(
            'actionGetAlternativeSearchPanels',
            [
                'previous_search_panels' => $searchPanels,
                'bo_query' => $searchedExpression,
            ],
            null,
            true
        )
```