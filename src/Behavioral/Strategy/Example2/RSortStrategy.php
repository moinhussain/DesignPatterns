<?php

include_once "Strategy.php";
class RSortStrategy implements Strategy {
	public function doAlgorithm(array $input_array): array {
		rsort($input_array);
		return $input_array;
	}
}
?>