<?php
require 'vendor/autoload.php';
$text = <<<HERE
Hello! <br/> Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

$text_input = new TextInput();
$formated_text = $text_input->formatText($text);
echo $formated_text . PHP_EOL;

// $text_formater = new TextFormater($text_input);
// $formated_text = $text_formater->formatText($text);
// echo $formated_text . PHP_EOL;

// $formatter = new PlainTextFormater(new TextInput());
// $formated_text = $formatter->formatText($text);
// echo $formated_text . PHP_EOL;

$formatter = new DangerousHTMLTagsFilter(new PlainTextFormater(new TextInput()));
$formated_text = $formatter->formatText($text);
echo "--------------------".PHP_EOL;
echo $formated_text . PHP_EOL;
?>