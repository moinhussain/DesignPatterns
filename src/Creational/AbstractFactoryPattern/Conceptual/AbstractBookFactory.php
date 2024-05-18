<?php
include_once "AbstractPHPBook.php";
include_once "AbstractMysqlBook.php";

abstract class AbstractBookFactory {
	abstract function makePHPBook(): AbstractBook;
	abstract function makeMysqlBook(): AbstractBook;
}

?>