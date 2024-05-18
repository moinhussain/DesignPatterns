<?php
require 'vendor/autoload.php';

//concreate docorator
class DangerousHTMLTagsFilter extends TextFormater {

	private $dangerousTagPatterns = [
		"|<script.*?>([\s\S]*)?</script>|i", // ...
	];

	public function formatText(string $text): string {
		$formatted_text = $this->inputFormater->formatText($text);

		echo "Called Dangerrous HTML filter". PHP_EOL;

		foreach ($this->dangerousTagPatterns as $pattern) {
			$text = preg_replace($pattern, '', $formatted_text);
		    }
		return $text;
	}

}

?>