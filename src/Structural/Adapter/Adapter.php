<?php
require 'vendor/autoload.php';

class Adapter extends Target {

	public function __construct(private Adaptee $adaptee) {
	}

	public function request(): void {
		$this->adaptee->specificRequest();
	}
}

?>