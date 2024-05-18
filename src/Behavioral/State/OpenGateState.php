<?php 
require 'vendor/autoload.php';

class OpenGateState implements GateState {
	public function __construct(private Gate $gate) {
	}

	public function enter(): void {
		echo "Entered!" . PHP_EOL;
		$this->gate->changeStateTo(new ClosedGateState($this->gate));
		echo "Closed Gate!" . PHP_EOL;
	}

	public function pay(): void {
		echo "Gate is Opened, don't pay again!" . PHP_EOL;
	}

	public function onPaySuccess(): void {

	}
	public function onPayFailed(): void {

	}
}

?>