<?php
class SharedShippingProfile implements ShippingProfileInterface {


	private string $name;
	private int $type;

	public function getName(): string {
		return $this->name;
	}

	public function getType(): int {
		return $this->type;
	}

	public function createShippingProfile(): void {
		$this->name = "My shared profile";
		$this->type = 1;
	}
}
?>