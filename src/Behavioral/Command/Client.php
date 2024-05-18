<?php
require 'vendor/autoload.php';

$light = new Light();
$invoker = new Invoker(
	new LightOnCommand($light),
	new LightOffCommand($light),
	new LightUpCommand($light),
	new LightDownCommand($light),
);
$invoker->clickOn();
$invoker->clickOff();
$invoker->clickUp();
$invoker->clickDown();

?>