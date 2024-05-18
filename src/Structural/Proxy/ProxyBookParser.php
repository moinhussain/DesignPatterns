<?php 
require 'vendor/autoload.php';

class ProxyBookParser implements IBookParser {

	private ?RealBookParser $parser = null;

	public function __construct(private string $book_name)
	{
	}

	public function getNumberOfPages(): int {
		echo "get number of pages". PHP_EOL;
		if ($this->parser === null) {
			$this->parser = new RealBookParser($this->book_name);
		}
		return $this->parser->getNumberOfPages();
	}
}


?>