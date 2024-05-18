<?php
require 'vendor/autoload.php';

class TextInput implements InputFormater {

	public function formatText(string $text): string {
		echo "class simple formatter". PHP_EOL;
		return $text;
	}

}

?>