<?php
include_once "IQuackStrategy.php";
include_once "IFlyStrategy.php";
class Duck {
	function __construct(
		private IQuackStrategy $quack_strategy,
		private IFlyStrategy $fly_strategy,
	) {
	}
	public function quack() {
		$this->quack_strategy->quack();
	}
	public function fly() {
		$this->fly_strategy->fly();
	}
}
?>