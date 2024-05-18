<?php
include_once "ShippingProfileInterface.php";
include_once "SharedShippingProfile.php";
include_once "CustomShippingProfile.php";

class ShippingProfileFactory {

	public static function getInstance(string $type): ShippingProfileInterface {

		switch ($type) {
			case "shared":
				return new SharedShippingProfile();
			case "custom":
				return new CustomShippingProfile();
			default:
				return new CustomShippingProfile();
		}

	}

}
?>