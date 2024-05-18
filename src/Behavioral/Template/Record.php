<?php
require 'vendor/autoload.php';
abstract class Record {
	//tempate method
	public function save(): void {
		$this->validate(); //required to override
		$this->beforeSave(); //hook
		if ($this->saveRecord()) {
			$this->saveSuccess(); //hook
		} else {
			$this->saveFailed(); //hook
		}
	}

	protected abstract function validate(): void;

	protected function beforeSave(): void {
		echo "Record beforeSave is called--". PHP_EOL;
	}

	protected function saveRecord(): bool {
		echo "Record got saved----". PHP_EOL;
		return true;
	}

	protected function saveSuccess(): void {
		echo "Record saveSuccess is called ---". PHP_EOL;
	}

	protected function saveFailed(): void {
		echo "Record saveFailed is called ---". PHP_EOL;
	}

}
?>