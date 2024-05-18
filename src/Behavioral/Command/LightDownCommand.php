<?php
include_once "ICommand.php";
include_once "Light.php";

class LightDownCommand implements ICommand {
	public function __construct(private Light $light) {}

	public function execute(): void {

		$this->light->lightDown();

	} 
	public function unexecute(): void {

		$this->light->lightUp();
	}

}
?>