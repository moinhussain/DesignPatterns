<?php

include_once "Strategy.php";
class SortStrategy implements Strategy {
	public function doAlgorithm(array $input_array): array {
		sort($input_array);
		return $input_array;
	}
}
?>