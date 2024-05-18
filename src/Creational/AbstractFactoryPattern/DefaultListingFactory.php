<?php
include_once "ListingFactory.php";

class DefaultListingFactory implements ListingFactory {

	public function createListing(): void
	{
		
		echo "normal listing created---". PHP_EOL;
	}
	public function createListingWithVideo(): void
	{
		
		echo "normal listing with video created---". PHP_EOL;
	}
}
?>