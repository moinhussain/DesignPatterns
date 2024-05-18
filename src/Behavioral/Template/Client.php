<?php
require 'vendor/autoload.php';

$user = new User();
$user->save();

echo "*************************". PHP_EOL;
$user = new Post();
$user->save();

?>