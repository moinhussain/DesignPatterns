<?php 
require 'vendor/autoload.php';

class ClosedGateState implements GateState {

	public function __construct(private Gate $gate) {
	}

	public function enter(): void {
		echo "Closed Gate State, trying to enter!". PHP_EOL;
	}

	public function pay(): void {
		echo "Initiated Payment processing!". PHP_EOL;
		sleep(5);
		$this->onPaySuccess();
		// $this->onPayFailed();

	}

	public function onPaySuccess(): void {
		echo "Payment got success, gate opened!". PHP_EOL;
		//change gate state to open
		$this->gate->changeStateTo(new OpenGateState($this->gate));
		echo "Enter please!" . PHP_EOL;
	}

	public function onPayFailed(): void {
		echo "Payment got failed, try again!". PHP_EOL;
		//remaing gate state to closed
	}
}

?>