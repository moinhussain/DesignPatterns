<?php
include_once "AbstractBookFactory.php";
include_once "AbstractPHPBook.php";
include_once "AbstractMysqlBook.php";
include_once "ORiellyPHPBook.php";
include_once "ORiellyMysqlBook.php";

class ORiellyBookFactory extends AbstractBookFactory {
	public function makePHPBook(): AbstractPHPBook
	{
		return new ORiellyPHPBook();
	}
	public function makeMysqlBook(): AbstractMysqlBook
	{
		return new ORiellyMysqlBook();
		
	}
}

?>