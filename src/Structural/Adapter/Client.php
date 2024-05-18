<?php
require 'vendor/autoload.php';

function clientCode(Target $target) {
	$target->request();
}

$target = new Target();
clientCode($target);

echo "*********" . PHP_EOL;

$target = new Adapter(new Adaptee());
clientCode($target);
?>