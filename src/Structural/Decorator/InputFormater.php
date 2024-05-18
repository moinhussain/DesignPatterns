<?php
require 'vendor/autoload.php';

interface InputFormater {

	public function formatText(string $text): string;

}

?>