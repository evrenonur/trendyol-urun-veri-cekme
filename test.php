<?php

include "Trendyol.php";
$trendyol = new Trendyol();

echo "<pre>";
print_r($trendyol->product_detail("43374789","108658","61"));
echo "</pre>";