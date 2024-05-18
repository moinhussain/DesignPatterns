<?php

class NoFlyStrategy implements IFlyStrategy {

	public function fly(): void {
		echo "does not fly" .PHP_EOL;
	}
}

?>