<?php
include_once "LightOnCommand.php";
include_once "LightOffCommand.php";

class Invoker {

	public function __construct(
		private LightOnCommand $lightOnCommand,
		private LightOffCommand $lightOffCommand,
		private LightUpCommand $lightUpCommand,
		private LightDownCommand $lightDownCommand
	) {
	}

	public function clickOn(): void {
		$this->lightOnCommand->execute();
	}

	public function clickOff(): void {
		$this->lightOffCommand->execute();
	}

	public function clickUp(): void {
		$this->lightUpCommand->execute();
	}

	public function clickDown(): void {
		$this->lightDownCommand->execute();
	}
}

?>