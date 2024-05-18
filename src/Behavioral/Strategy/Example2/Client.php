<?php
include_once "Context.php";
include_once "SortStrategy.php";
include_once "RSortStrategy.php";

$input_array = ["b", "a", "g", "d"];

echo "SORT STRATEGY APPLIED----". PHP_EOL;
$context = new Context($input_array, new SortStrategy());
$context->doSomeBusinessLogic();

echo "REVER SORT STRATEGY APPLIED----". PHP_EOL;
$context = new Context($input_array, new RSortStrategy());
$context->doSomeBusinessLogic();
?>