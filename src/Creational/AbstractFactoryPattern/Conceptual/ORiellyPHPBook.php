<?php
include_once "AbstractPHPBook.php";

class ORiellyPHPBook extends AbstractPHPBook {
	 function getTitle(): string {
		return "PHP Basics";
	 }
	function getAuthor(): string {
		return "Moin Hussain PHP";
	}
}
