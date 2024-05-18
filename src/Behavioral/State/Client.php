<?php 
require 'vendor/autoload.php';
$gate = new Gate();
$gate->pay();
sleep(2);
$gate->enter();
sleep(2);
$gate->pay();
sleep(2);
$gate->pay();

?>