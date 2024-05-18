<?php 
require 'vendor/autoload.php';

class AlphabetIterator implements Iterator {
	private int $position;

	public function __construct(private WordsCollection $wordsCollection) {
	}

	public function current(): string
	{
		return $this->wordsCollection->words[$this->position];
	}

	public function key(): int
	{
		return $this->position;
	}

	public function next(): void
	{
		++$this->position;
	}

	public function rewind(): void
	{
		$this->position = 0;
		
	}

	public function valid(): bool
	{
		return !empty($this->wordsCollection->words[$this->position]);
	}
}

?>