<?php
include_once "AbstractMysqlBook.php";

class ORiellyMysqlBook extends AbstractMysqlBook {
	 function getTitle(): string {

		return "Mysql Basics";
	 }
	function getAuthor(): string {
		return "Moin Hussain Mysql";

	}
}
