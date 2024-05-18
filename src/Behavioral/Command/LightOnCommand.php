<?php
include_once "ICommand.php";
include_once "Light.php";

class LightOnCommand implements ICommand {

	public function __construct(private Light $light) {}



	public function execute(): void {
		$this->light->switchOn();

	} 

	public function unexecute(): void {
		$this->light->switchOff();
	}

}
?>