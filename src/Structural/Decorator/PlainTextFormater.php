<?php
require 'vendor/autoload.php';

//concreate docorator
class PlainTextFormater extends TextFormater {

	public function formatText(string $text): string {
		$formatted_text = $this->inputFormater->formatText($text);

		echo "Called Stripping out tags formatter". PHP_EOL;
		return strip_tags($formatted_text);
	}

}

?>