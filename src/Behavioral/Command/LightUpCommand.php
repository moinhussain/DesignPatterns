<?php
include_once "ICommand.php";
include_once "Light.php";

class LightUpCommand implements ICommand {
	public function __construct(private Light $light) {}

	public function execute(): void {

		$this->light->lightUp();

	} 
	public function unexecute(): void {

		$this->light->lightDown();
	}

}
?>