<?php

include_once "IQuackStrategy.php";
class NoQuackStrategy implements IQuackStrategy {

	public function quack(): void {
		echo "does not quack" .PHP_EOL;
	}
}

?>