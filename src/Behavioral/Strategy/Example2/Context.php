<?php

class Context {

	public function __construct(private array $input_array, private Strategy $strategy)
	{
	}

	public function setStrategy(Strategy $strategy): void {
		$this->strategy = $strategy;
	}

	public function doSomeBusinessLogic(): void {
		$result = $this->strategy->doAlgorithm($this->input_array);
		echo implode($result). PHP_EOL;
	}
}
?>