<?php 
require 'vendor/autoload.php';

$wordsCollection = new WordsCollection();
$wordsCollection->addWord("Mohammad");
$wordsCollection->addWord("Moin");
$wordsCollection->addWord("Hussain");

foreach ($wordsCollection as $key => $value) {
	var_dump($key, $value);
	echo "\n";
}
return;

$wordsCollectionIterator = $wordsCollection->getIterator();


while($wordsCollectionIterator->valid()) {
	echo $wordsCollectionIterator->current(). PHP_EOL;
	$wordsCollectionIterator->next();
}

$wordsCollectionIterator->rewind();
while($wordsCollectionIterator->valid()) {
	echo $wordsCollectionIterator->current(). PHP_EOL;
	$wordsCollectionIterator->next();
}
?>