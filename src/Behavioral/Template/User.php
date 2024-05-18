<?php
require 'vendor/autoload.php';
class User extends Record {

	protected function validate(): void {
		echo "User Validate is called ----". PHP_EOL;
	}

	protected function beforeSave(): void {
		echo "User beforeSave is called--". PHP_EOL;
	}

	protected function saveSuccess(): void {
		echo "User saveSuccess is called ---". PHP_EOL;
	}

	protected function saveFailed(): void {
		echo "User saveFailed is called ---". PHP_EOL;
	}

}
?>