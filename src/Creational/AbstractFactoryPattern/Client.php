
<?php

include_once "AbstractListingFactory.php";
$type = $argv[1];
$listing_factory =  AbstractListingFactory::getFactory($type);
$listing_factory->createListing();
$listing_factory->createListingWithVideo();
?>