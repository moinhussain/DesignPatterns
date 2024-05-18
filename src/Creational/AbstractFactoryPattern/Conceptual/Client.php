<?php

include_once "ORiellyBookFactory.php";

$oreilly_book_factory = new ORiellyBookFactory();
$orielly_php_book = $oreilly_book_factory->makePHPBook();
$oreilly_mysql_book =  $oreilly_book_factory->makeMysqlBook();

echo $orielly_php_book->getTitle(). PHP_EOL;
echo $oreilly_mysql_book->getTitle(). PHP_EOL;
?>