<?php
require 'vendor/autoload.php';

class Adaptee {

	public function specificRequest(): void {
		echo "Adaptee specific request is called...." . PHP_EOL;
	}
}

?>