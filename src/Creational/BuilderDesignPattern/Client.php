<?php
include_once "Director.php";
include_once "EstimatedDeliveryDate.php";
include_once "DomesticEddBuilder.php";
include_once "InternationalEddBuilder.php";

$domestic_builder = new DomesticEddBuilder();
$international_builder = new InternationalEddBuilder();

$director = new Director($domestic_builder);
$director->buildEdd();
$edd = $director->getEdd();
echo $edd. PHP_EOL;

$director = new Director($international_builder);
$director->buildEdd();
$edd = $director->getEdd();
echo $edd;
?>