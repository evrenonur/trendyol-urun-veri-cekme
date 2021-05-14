<?php

include "Trendyol.php";
$trendyol = new Trendyol();

echo "<pre>";
print_r($trendyol->infinite_scroll("sr?wg=1&wb=109791&lc=1004&fl=encoksatanurunler"));
echo "</pre>";