<?php 
require 'vendor/autoload.php';

class Gate {

	public function __construct(private ?GateState $state = null) {

		$this->state = new ClosedGateState($this);
	}

	public function enter(): void {
		$this->state->enter();
	}

	public function pay(): void {
		$this->state->pay();
	}

	public function changeStateTo(GateState $state): void {
		$this->state = $state;
	}

}

?>