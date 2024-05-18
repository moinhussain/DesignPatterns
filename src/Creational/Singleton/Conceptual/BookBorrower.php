<?php
include_once "SingletonBook.php";

class BookBorrower {
	private ?SingletonBook $borrowed_book;
	private bool $having_book = false;

	function __construct() {}

	public function borrowBook(): void {
		$this->borrowed_book = SingletonBook::borrowBook();
		if (!$this->borrowed_book) {
			$this->having_book = false;
		} else {
		 	$this->having_book = true;
		}
	}

	public function returnBook(): void {
		$this->borrowed_book->returnBook();
	}

	public function getAuthorAndTitle(): string {
		if ($this->having_book) {
			return $this->borrowed_book->getAuthorAndTitle();
		}
		return "I don't have a book";
	}
}


?>