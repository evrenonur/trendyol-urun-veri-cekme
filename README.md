
# Trendyol Ürün Veri Çekme

Trendyol üzerinde yer alan ürünler hakkında bilgileri kolay bir şekilde çekmek amacı ile yazılmıştır.

## Katkı Çağrısı

Eksik veya sizlerinde katkısının olabileceğini düşündüğünüz fonksiyonları **pull request** gönderebilirsiniz veya istediğiniz 
fonksiyonun eklenmesi için **issue** açabilirsiniz. 

## Hızlı Bakış
 * [Kurulum](#kurulum)
 * [Kullanım](#kullanım)
 * [Tüm Ürünleri Getir](#kullanım)
 * [Ürün Detay](#detay)

 
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





## Detay 

```php
include "Trendyol.php";
$trendyol = new Trendyol();
/*$id,$merchantId,$campaignId*/
echo "<pre>";
print_r($trendyol->product_detail("43374789","108658","61"));
echo "</pre>";
```

## Örnek Çıktı
```text

stdClass Object
(
    [attributes] => Array
        (
            [0] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Kol Tipi
                            [id] => 12
                        )

                    [value] => stdClass Object
                        (
                            [name] => Askılı
                            [id] => 62
                        )

                    [starred] => 
                )

            [1] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Kullanım Alanı
                            [id] => 196
                        )

                    [value] => stdClass Object
                        (
                            [name] => Günlük
                            [id] => 3981
                        )

                    [starred] => 
                )

            [2] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Materyal
                            [id] => 14
                        )

                    [value] => stdClass Object
                        (
                            [name] => Pamuk
                            [id] => 16827
                        )

                    [starred] => 
                )

            [3] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Yaka
                            [id] => 22
                        )

                    [value] => stdClass Object
                        (
                            [name] => Yuvarlak Yaka
                            [id] => 192
                        )

                    [starred] => 
                )

            [4] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Renk
                            [id] => 348
                        )

                    [value] => stdClass Object
                        (
                            [name] => Beyaz
                            [id] => 3
                        )

                    [starred] => 
                )

            [5] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Paket İçeriği
                            [id] => 66
                        )

                    [value] => stdClass Object
                        (
                            [name] => 6'lı
                            [id] => 1395
                        )

                    [starred] => 
                )

            [6] => stdClass Object
                (
                    [key] => stdClass Object
                        (
                            [name] => Desen
                            [id] => 33
                        )

                    [value] => stdClass Object
                        (
                            [name] => Düz Renk
                            [id] => 314
                        )

                    [starred] => 
                )

        )

    [alternativeVariants] => Array
        (
        )

    [variants] => Array
        (
            [0] => stdClass Object
                (
                    [attributeId] => 338
                    [attributeName] => Beden
                    [attributeType] => Size
                    [attributeValue] => XXXL
                    [stamps] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => 1
                                    [text] => KARGO BEDAVA
                                )

                            [1] => stdClass Object
                                (
                                    [type] => 3
                                    [text] => %25
                                )

                        )

                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 119,99 TL
                                    [value] => 119.99
                                )

                            [currency] => TRY
                        )

                    [attributeBeautifiedValue] => xxxl
                    [isWinner] => 1
                    [listingId] => 1f338e92e55216efef695943547b120a
                    [stock] => 
                    [sellable] => 1
                    [availableForClaim] => 1
                    [barcode] => TRADAEFSN0007
                    [itemNumber] => 76943500
                    [discountedPriceInfo] => 
                    [unitInfo] => stdClass Object
                        (
                            [unitPrice] => 
                            [unitPriceText] => 
                        )

                )

            [1] => stdClass Object
                (
                    [attributeId] => 338
                    [attributeName] => Beden
                    [attributeType] => Size
                    [attributeValue] => S
                    [stamps] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => 1
                                    [text] => KARGO BEDAVA
                                )

                            [1] => stdClass Object
                                (
                                    [type] => 3
                                    [text] => %25
                                )

                        )

                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 119,99 TL
                                    [value] => 119.99
                                )

                            [currency] => TRY
                        )

                    [attributeBeautifiedValue] => s
                    [isWinner] => 
                    [listingId] => 51c6cdc7bee1e7d41a7b632597e3eb57
                    [stock] => 2
                    [sellable] => 1
                    [availableForClaim] => 1
                    [barcode] => TRADAEFSN0002
                    [itemNumber] => 76943502
                    [discountedPriceInfo] => 
                    [unitInfo] => stdClass Object
                        (
                            [unitPrice] => 
                            [unitPriceText] => 
                        )

                )

            [2] => stdClass Object
                (
                    [attributeId] => 338
                    [attributeName] => Beden
                    [attributeType] => Size
                    [attributeValue] => M
                    [stamps] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => 1
                                    [text] => KARGO BEDAVA
                                )

                            [1] => stdClass Object
                                (
                                    [type] => 3
                                    [text] => %25
                                )

                        )

                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 119,99 TL
                                    [value] => 119.99
                                )

                            [currency] => TRY
                        )

                    [attributeBeautifiedValue] => m
                    [isWinner] => 
                    [listingId] => 97a4f5ac43d8dbb8335af26b24bd6810
                    [stock] => 
                    [sellable] => 1
                    [availableForClaim] => 1
                    [barcode] => TRADAEFSN0003
                    [itemNumber] => 76943496
                    [discountedPriceInfo] => 
                    [unitInfo] => stdClass Object
                        (
                            [unitPrice] => 
                            [unitPriceText] => 
                        )

                )

            [3] => stdClass Object
                (
                    [attributeId] => 338
                    [attributeName] => Beden
                    [attributeType] => Size
                    [attributeValue] => L
                    [stamps] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => 1
                                    [text] => KARGO BEDAVA
                                )

                            [1] => stdClass Object
                                (
                                    [type] => 3
                                    [text] => %25
                                )

                        )

                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 119,99 TL
                                    [value] => 119.99
                                )

                            [currency] => TRY
                        )

                    [attributeBeautifiedValue] => l
                    [isWinner] => 
                    [listingId] => 334ee159d730dd21d28631ea265a3b85
                    [stock] => 
                    [sellable] => 1
                    [availableForClaim] => 1
                    [barcode] => TRADAEFSN0004
                    [itemNumber] => 76933135
                    [discountedPriceInfo] => 
                    [unitInfo] => stdClass Object
                        (
                            [unitPrice] => 
                            [unitPriceText] => 
                        )

                )

            [4] => stdClass Object
                (
                    [attributeId] => 338
                    [attributeName] => Beden
                    [attributeType] => Size
                    [attributeValue] => XL
                    [stamps] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => 1
                                    [text] => KARGO BEDAVA
                                )

                            [1] => stdClass Object
                                (
                                    [type] => 3
                                    [text] => %25
                                )

                        )

                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 119,99 TL
                                    [value] => 119.99
                                )

                            [currency] => TRY
                        )

                    [attributeBeautifiedValue] => xl
                    [isWinner] => 
                    [listingId] => 570e0ed8c20593181113a4131ae9ee4c
                    [stock] => 
                    [sellable] => 1
                    [availableForClaim] => 1
                    [barcode] => TRADAEFSN0005
                    [itemNumber] => 76943501
                    [discountedPriceInfo] => 
                    [unitInfo] => stdClass Object
                        (
                            [unitPrice] => 
                            [unitPriceText] => 
                        )

                )

            [5] => stdClass Object
                (
                    [attributeId] => 338
                    [attributeName] => Beden
                    [attributeType] => Size
                    [attributeValue] => XXL
                    [stamps] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [type] => 1
                                    [text] => KARGO BEDAVA
                                )

                            [1] => stdClass Object
                                (
                                    [type] => 3
                                    [text] => %25
                                )

                        )

                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 89,90 TL
                                    [value] => 89.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 119,99 TL
                                    [value] => 119.99
                                )

                            [currency] => TRY
                        )

                    [attributeBeautifiedValue] => xxl
                    [isWinner] => 
                    [listingId] => 2e831332756193d4c963eb6be04456ae
                    [stock] => 
                    [sellable] => 1
                    [availableForClaim] => 1
                    [barcode] => TRADAEFSN0006
                    [itemNumber] => 76943505
                    [discountedPriceInfo] => 
                    [unitInfo] => stdClass Object
                        (
                            [unitPrice] => 
                            [unitPriceText] => 
                        )

                )

        )

    [otherMerchants] => Array
        (
            [0] => stdClass Object
                (
                    [url] => /adaefsun/tutku-erkek-atlet-6-li-paket-p-43374789?boutiqueId=61&merchantId=143061
                    [reviewsUrl] => /adaefsun/tutku-erkek-atlet-6-li-paket-p-43374789/yorumlar
                    [questionsUrl] => /adaefsun/tutku-erkek-atlet-6-li-paket-p-43374789/saticiya-sor?merchantId=143061
                    [promotions] => Array
                        (
                        )

                    [discountedPriceInfo] => 
                    [isSellable] => 1
                    [isBasketDiscount] => 
                    [hasStock] => 1
                    [price] => stdClass Object
                        (
                            [profitMargin] => 0
                            [discountedPrice] => stdClass Object
                                (
                                    [text] => 94,90 TL
                                    [value] => 94.9
                                )

                            [sellingPrice] => stdClass Object
                                (
                                    [text] => 94,90 TL
                                    [value] => 94.9
                                )

                            [originalPrice] => stdClass Object
                                (
                                    [text] => 255,00 TL
                                    [value] => 255
                                )

                            [currency] => TRY
                        )

                    [isFreeCargo] => 1
                    [merchant] => stdClass Object
                        (
                            [isSearchableMerchant] => 1
                            [id] => 143061
                            [name] => ADA KRİSTAL DIŞ TİCARET LİMİTED ŞİRKETİ
                            [officialName] => ADA KRİSTAL DIŞ TİCARET LİMİTED ŞİRKETİ
                            [cityName] =>  Sakarya 
                            [taxNumber] => 0071223038
                            [sellerScore] => 9.7
                            [sellerScoreColor] => 0BC15C
                        )

                    [deliveryInformation] => stdClass Object
                        (
                            [isRushDelivery] => 
                            [deliveryDate] => 20 Mayıs - 4 Haziran
                        )

                )

        )

    [campaign] => stdClass Object
        (
            [id] => 61
            [name] => Tüm Ürünler
            [startDate] => 2010-01-01T17:04:05
            [endDate] => 2061-01-01T18:04:05
            [isMultipleSupplied] => 
            [stockTypeId] => 7
            [url] => /tum-urunler/butikdetay/61
            [showTimer] => 
        )

    [category] => stdClass Object
        (
            [id] => 1004
            [name] => Atlet
            [hierarchy] => Giyim/İç Giyim/Atlet
            [refundable] => 1
            [beautifiedName] => atlet
        )

    [brand] => stdClass Object
        (
            [isVirtual] => 
            [beautifiedName] => adaefsun
            [id] => 983880
            [name] => AdaEfsun
            [path] => /adaefsun-x-b983880
        )

    [color] => Beyaz
    [showVariants] => 1
    [showSexualContent] => 1
    [metaBrand] => stdClass Object
        (
            [id] => 983880
            [name] => AdaEfsun
            [beautifiedName] => 
            [isVirtual] => 
            [path] => 
        )

    [landings] => Array
        (
        )

    [id] => 43374789
    [productCode] => TRADAEFSN0002
    [name] => Tutku Erkek Atlet 6'lı Paket
    [nameWithProductCode] => Tutku Erkek Atlet 6'lı Paket TRADAEFSN0002
    [description] => 
    [contentDescriptions] => Array
        (
            [0] => stdClass Object
                (
                    [description] => %100 PAMUKLU KLASİK ERKEK ATLET 6'LI PAKET
                    [bold] => 
                )

            [1] => stdClass Object
                (
                    [description] => Bu üründen en fazla 10 adet sipariş verilebilir. 10 adetin üzerindeki siparişleri Trendyol iptal etme hakkını saklı tutar.
                    [bold] => 
                )

            [2] => stdClass Object
                (
                    [description] => Kampanya fiyatından satılmak üzere 100 adetten fazla stok sunulmuştur.
                    [bold] => 
                )

            [3] => stdClass Object
                (
                    [description] => İncelemiş olduğunuz ürünün satış fiyatını satıcı belirlemektedir.
                    [bold] => 
                )

            [4] => stdClass Object
                (
                    [description] => Bir ürün birden fazla satıcı tarafından satılabilir. Ürün liste ve detay sayfalarında tüketici memnuniyeti göz önüne alınarak fiyat avantajı, teslimat hızı, iade oranları ve genel hizmet kalitesine göre belirlenmiş puanı en yüksek satıcı görünür satıcı olur. Diğer satıcılar, ürün detay sayfasında alternatif olarak listelenirler.
                    [bold] => 
                )

        )

    [productGroupId] => 36269833
    [tax] => 8
    [businessUnit] => İç Giyim
    [maxInstallment] => 12
    [gender] => stdClass Object
        (
            [name] => Unisex
            [id] => 3
        )

    [url] => /adaefsun/tutku-erkek-atlet-6-li-paket-p-43374789?boutiqueId=61&merchantId=108658
    [images] => Array
        (
            [0] => /ty38/product/media/images/20210326/18/75503202/76943502/1/1_org_zoom.jpg
        )

    [isSellable] => 1
    [isBasketDiscount] => 
    [hasStock] => 1
    [price] => stdClass Object
        (
            [profitMargin] => 0
            [discountedPrice] => stdClass Object
                (
                    [text] => 89,90 TL
                    [value] => 89.9
                )

            [sellingPrice] => stdClass Object
                (
                    [text] => 89,90 TL
                    [value] => 89.9
                )

            [originalPrice] => stdClass Object
                (
                    [text] => 119,99 TL
                    [value] => 119.99
                )

            [currency] => TRY
        )

    [isFreeCargo] => 1
    [promotions] => Array
        (
        )

    [merchant] => stdClass Object
        (
            [isSearchableMerchant] => 1
            [id] => 108658
            [name] => Efsun
            [officialName] => ÖZYIL TUZ.İŞLET.GIDA NAK.MAK.İNŞ.TİC.VESAN.LTD.ŞTİ.
            [cityName] =>  Sakarya 
            [taxNumber] => 7170049985
            [sellerScore] => 9.6
            [sellerScoreColor] => 0BC15C
            [sellerLink] => /magaza/efsun-m-108658
        )

    [deliveryInformation] => stdClass Object
        (
            [isRushDelivery] => 
            [deliveryDate] => 20 - 31 Mayıs
        )

    [isMarketplace] => 1
    [productStamps] => Array
        (
            [0] => stdClass Object
                (
                    [type] => TypeA
                    [imageUrl] => /seller-ads/editor/resources/seller-selection-stamp-v12.png
                    [position] => lower-left
                    [aspectRatio] => 0.35
                    [priority] => 99999
                )

        )

    [hasHtmlContent] => 
    [favoriteCount] => 3663
    [uxLayout] => Fashion
    [isDigitalGood] => 
    [isRunningOut] => 1
    [scheduledDelivery] => 
    [ratingScore] => stdClass Object
        (
            [averageRating] => 4.83
            [totalRatingCount] => 665
            [totalCommentCount] => 432
        )

    [showStarredAttributes] => 
    [reviewsUrl] => /adaefsun/tutku-erkek-atlet-6-li-paket-p-43374789/yorumlar
    [questionsUrl] => /adaefsun/tutku-erkek-atlet-6-li-paket-p-43374789/saticiya-sor?merchantId=108658
    [sellerQuestionEnabled] => 1
    [breadcrumb] => stdClass Object
        (
            [items] => Array
                (
                    [0] => stdClass Object
                        (
                            [path] => /kadin-x-g1
                            [name] => Kadın
                        )

                    [1] => stdClass Object
                        (
                            [path] => /kadin-giyim-x-g1-c82
                            [name] => Giyim
                        )

                    [2] => stdClass Object
                        (
                            [path] => /kadin-ic-giyim-x-g1-c64
                            [name] => İç Giyim
                        )

                    [3] => stdClass Object
                        (
                            [path] => /kadin-atlet--body-x-g1-c101492
                            [name] => Atlet & Body
                        )

                    [4] => stdClass Object
                        (
                            [path] => /kadin-atlet-x-g1-c1004
                            [name] => Atlet
                        )

                )

        )

)

```



