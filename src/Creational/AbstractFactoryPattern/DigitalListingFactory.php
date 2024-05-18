<?php
include_once "ListingFactory.php";

class DigitalListingFactory implements ListingFactory {

	public function createListing(): void
	{
		echo "digital listing created---". PHP_EOL;
		
	}
	public function createListingWithVideo(): void
	{
		echo "digital listing with video created---". PHP_EOL;
		
	}
}
?>