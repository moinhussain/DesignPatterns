<?php 
require 'vendor/autoload.php';

class WordsCollection implements IteratorAggregate {
	/** @var string[] */
	public array $words = [];

	public function addWord(string $word): void {
		$this->words[] = $word;
	}

	public function getIterator(): AlphabetIterator
	{
		return new AlphabetIterator($this);
		
	}
}
?>