<?php
include_once "IQuackStrategy.php";

class LoudQuackStrategy implements IQuackStrategy {

	public function quack(): void {
		echo "quack loudly" .PHP_EOL;
	}
}

?>