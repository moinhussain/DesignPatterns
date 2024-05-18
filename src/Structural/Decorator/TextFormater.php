<?php
require 'vendor/autoload.php';

//docorator
class TextFormater implements InputFormater {

	public function __construct(protected InputFormater $inputFormater) {
	}

	public function formatText(string $text): string {
		$formatted_text = $this->inputFormater->formatText($text);
		return $formatted_text;
	}

}

?>