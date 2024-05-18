<?php
include_once "Subscriber.php";

class Channel {

	private array $subscribers = [];

	public function subscribe(Subscriber $user): void {
		array_push($this->subscribers, $user);
	}

	public function unsubscribe(Subscriber $user): void {
		unset( $this->subscribers[array_search( $user, $this->subscribers )] );
	}

	public function notifyAll(string $msg): void {
		foreach ($this->subscribers as $user) {
			$user->notify($msg);
		}

	}

}
?>