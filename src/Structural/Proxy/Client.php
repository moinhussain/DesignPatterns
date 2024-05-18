<?php 
require 'vendor/autoload.php';

function clientCode(IBookParser $parser) {
	echo $parser->getNumberOfPages() . PHP_EOL;

}

clientCode(new RealBookParser("book1")); //expensive operation is done here
clientCode(new ProxyBookParser("book1")); // expensive opeation is done only when needed
?>