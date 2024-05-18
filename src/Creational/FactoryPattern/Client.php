<?php
include_once "ShippingProfileFactory.php";

$profile_type = $argv[1];

$shipping_profile = ShippingProfileFactory::getInstance($profile_type);
$shipping_profile->createShippingProfile();
echo "Shipping profile constructed: " . $shipping_profile->getName(). PHP_EOL;

?>