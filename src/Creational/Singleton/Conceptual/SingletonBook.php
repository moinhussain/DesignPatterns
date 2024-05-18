<?php

class SingletonBook {
	private static ?self $book_instance = null;
	private static bool $is_available = true;

	private function __construct(private string $title, private string $author) {
		echo "constructor called" . PHP_EOL;
	}


	public static function borrowBook(): ?self {

		if (!self::$is_available) {
			return null;
		}

		if (self::$book_instance) {
			return self::$book_instance;
		}

		self::$book_instance = new self("Design Pattern", "Moin Hussain");
		self::$is_available = false;

		return self::$book_instance;

	}

	public static function returnBook(): void {
		self::$is_available = true;
	}
	
	public function getAuthorAndTitle(): string {
		return join(" by ", [$this->title, $this->author]);
	}


}


?>