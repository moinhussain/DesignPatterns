<?php
include_once "ICommand.php";
include_once "Light.php";

class Light {

	public function switchOn(): void {
		echo "Switch On...". PHP_EOL;
	} 
	public function switchOff(): void {
		echo "Switch Off...". PHP_EOL;
	}
	public function lightUp(): void {
		echo "Light up ...". PHP_EOL;
	} 
	public function lightDown(): void {
		echo "Light down ...". PHP_EOL;
	}

}
?>