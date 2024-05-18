<?php
interface ICommand {
	public function execute(): void; 
	public function unexecute(): void; 

}
?>