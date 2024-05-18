<?php
include_once "IFlyStrategy.php";
include_once "SimpleFlyStrategy.php";
include_once "JetFlyStrategy.php";
include_once "NoFlyStrategy.php";
include_once "LoudQuackStrategy.php";
include_once "NoQuackStrategy.php";
include_once "Duck.php";

echo "---WILD DUCK---------". PHP_EOL;
$wild_duck = new Duck(new LoudQuackStrategy(), new SimpleFlyStrategy());
$wild_duck->quack();
$wild_duck->fly();

echo "---CLOUD DUCK---------". PHP_EOL;

$cloud_duck = new Duck(new LoudQuackStrategy(), new JetFlyStrategy());
$cloud_duck->quack();
$cloud_duck->fly();

echo "------RUBBER DUCK------". PHP_EOL;

$rubber_duck = new Duck(new NoQuackStrategy,new NoFlyStrategy());
$wild_duck->quack();
$rubber_duck->fly();

?>