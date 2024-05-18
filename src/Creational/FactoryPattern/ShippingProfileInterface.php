<?php
interface ShippingProfileInterface {

 
	public function getName(): string;
	public function getType(): int;
	public function createShippingProfile(): void;

}
?>