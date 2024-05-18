<?php
include_once "ListingFactory.php";
include_once "DefaultListingFactory.php";

class AbstractListingFactory {
	public static function getFactory(string $type): ListingFactory {
		switch ($type) {
			case "normal":
				return new DefaultListingFactory();
				break;

			case "digital":
				return new DigitalListingFactory();
				break;
			
			default:
				return new DefaultListingFactory();
				break;
		}

}
}
