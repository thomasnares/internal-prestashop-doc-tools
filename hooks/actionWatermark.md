---
menuTitle: actionWatermark
Title: actionWatermark
hidden: true
hookTitle: Watermark
files:
  - src/Adapter/Product/Image/Uploader/ProductImageUploader.php
locations:
  - frontoffice
type:
  - action
---

# Hook actionWatermark

## Information

{{% notice tip %}}
**Watermark:** 


{{% /notice %}}

Hook locations: 
  - frontoffice

Hook type: 
  - action

Located in: 
  - [https://github.com/PrestaShop/PrestaShop/blob/8.0.x/src/Adapter/Product/Image/Uploader/ProductImageUploader.php](src/Adapter/Product/Image/Uploader/ProductImageUploader.php)

## Hook call with parameters

```php
dispatchWithParameters(
            'actionWatermark',
            ['id_image' => $imageId->getValue(), 'id_product' => $productId]
        )
```