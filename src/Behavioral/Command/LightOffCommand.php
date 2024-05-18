<?php
include_once "ICommand.php";
include_once "Light.php";

class LightOffCommand implements ICommand {
	public function __construct(private Light $light) {}

	public function execute(): void {

		$this->light->switchOff();

	} 
	public function unexecute(): void {

		$this->light->switchOn();
	}

}
?>