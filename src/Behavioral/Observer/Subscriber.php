<?php
class Subscriber {

	function __construct(public int $user_id) {

		echo "consto--";
	}

	public function notify(string $msg): void {
		echo $this->user_id. " recieved:" . $msg. PHP_EOL;
	}

}
?>