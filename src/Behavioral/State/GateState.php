<?php 
interface GateState {
	public function enter(): void;
	public function pay(): void;
	public function onPaySuccess(): void;
	public function onPayFailed(): void;
}

?>