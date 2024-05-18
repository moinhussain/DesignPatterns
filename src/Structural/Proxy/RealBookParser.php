<?php 
require 'vendor/autoload.php';

class RealBookParser implements IBookParser {

	public function __construct(private string $book_name)
	{
		//expensive operation
		echo "expensive operation";
	}

	public function getNumberOfPages(): int {
		return 10;
	}
}


?>