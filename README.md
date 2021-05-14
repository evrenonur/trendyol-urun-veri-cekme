
# Trendyol Ürün Veri Çekme

Trendyol üzerinde yer alan ürünler hakkında bilgileri kolay bir şekilde çekmek amacı ile yazılmıştır.

## Katkı Çağrısı

Eksik veya sizlerinde katkısının olabileceğini düşündüğünüz fonksiyonları **pull request** gönderebilirsiniz veya istediğiniz 
fonksiyonun eklenmesi için **issue** açabilirsiniz. 

## Hızlı Bakış
 * [Kurulum](#kurulum)
 * [Kullanım](#kullanım)
 * [Tüm Ürünleri Getir](#kullanım)
 * [Ürün Detay](#ürün)

 
 ## Kurulum

Kurulum için composer gerekmektedir. Composer kurulu değil ise Windows  için [Buradan](https://getcomposer.org/) indirebilirsiniz.

```

composer install

```

## Kullanım (Tüm Ürünleri Çekmek İçin)

```php
include "Trendyol.php";
$trendyol = new Trendyol();
/*
 * https://www.trendyol.com/erkek-atlet-x-g2-c1004
 * Yukarıda belirtilen url https://www.trendyol.com/ haric geri kalanını ilgili
 * fonksiyona parametre olarak gönderin.
 * 
 * /
echo "<pre>";


print_r($trendyol->infinite_scroll("erkek-atlet-x-g2-c1004"));

/*
 * İlgili adrese ait tüm ürünleri listeler.
 * 
 * /
print_r($trendyol->infinite_scrolls("erkek-atlet-x-g2-c1004"));
echo "</pre>";
```

## Ürün Detay 

```php
include "Trendyol.php";
$trendyol = new Trendyol();

echo "<pre>";
print_r($trendyol->product_detail("43374789","108658","61"));
echo "</pre>";
```

## Örnek Çıktı
```text


Array
(
    [0] => stdClass Object
        (
            [id] => 42670961
            [name] => Kadın Siyah Dantelli V Yaka Bluz 0YZK2-10102
            [images] => Array
                (
                    [0] => /ty73/product/media/images/20210218/14/64947296/75830364/1/1_org_zoom.jpg
                    [1] => /ty73/product/media/images/20210218/14/64947297/75830364/1/1_org_zoom.jpg
                    [2] => /ty72/product/media/images/20210218/14/64947299/75830364/1/1_org_zoom.jpg
                    [3] => /ty72/product/media/images/20210218/14/64947300/75830364/1/1_org_zoom.jpg
                    [4] => /ty72/product/media/images/20210218/14/64947303/75830364/1/1_org_zoom.jpg
                    [5] => /ty72/product/media/images/20210218/14/64947309/75830364/1/1_org_zoom.jpg
                    [6] => /ty71/product/media/images/20210218/14/64947312/75830364/1/1_org_zoom.jpg
                )

            [imageAlt] => XENA Kadın Siyah Dantelli V Yaka Bluz 0YZK2-10102
            [brand] => stdClass Object
                (
                    [id] => 982012
                    [name] => XENA
                )

            [installmentCount] => 12
            [tax] => 8
            [webColor] => 14_Siyah
            [businessUnit] => Kadın B
            [ratingScore] => stdClass Object
                (
                    [averageRating] => 4.2746113989637
                    [totalCount] => 772
                )

            [showSexualContent] => 1
            [productGroupId] => 35644428
            [sections] => Array
                (
                    [0] => stdClass Object
                        (
                            [id] => 22
                        )

                    [1] => stdClass Object
                        (
                            [id] => 1
                        )

                )

            [categoryHierarchy] => Bluz/Giyim/Üst Giyim/Bluz & Tunik
            [categoryId] => 590
            [categoryName] => Bluz
            [url] => /xena/kadin-siyah-dantelli-v-yaka-bluz-0yzk2-10102-p-42670961?boutiqueId=568378&merchantId=132176
            [merchantId] => 132176
            [campaignId] => 568378
            [price] => stdClass Object
                (
                    [sellingPrice] => 39.99
                    [originalPrice] => 39.99
                    [manipulatedOriginalPrice] => 39.99
                    [discountedPrice] => 29.99
                    [buyingPrice] => 0
                )

            [promotions] => Array
                (
                    [0] => stdClass Object
                        (
                            [id] => 1154523
                            [name] => Sepette %25 İndirim
                            [shortName] => Çok Al Az Öde
                        )

                )

            [rushDeliveryDuration] => 0
            [freeCargo] => 
            [margin] => 0
            [campaignName] => Şimdi Moda -  Kadın Tekstil 25
            [listingId] => 9794864b8eb5cbe4b496330dccaedc3f
            [winnerVariant] => S
            [itemNumber] => 75830365
            [discountedPriceInfo] => Sepette %25 İndirim
        )
        ...
      )

```


