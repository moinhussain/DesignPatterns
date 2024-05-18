<?php
require 'vendor/autoload.php';
class Post extends Record {

	protected function validate(): void {
		echo "User Validate is called ----". PHP_EOL;
	}

}
?>