<?php

include_once "BookBorrower.php";

$book_borrower = new BookBorrower();
$book_borrower->borrowBook();
echo $book_borrower->getAuthorAndTitle(). PHP_EOL; // Design Pattern by Moin Hussain

$book_borrower2 = new BookBorrower();
$book_borrower2->borrowBook();
echo $book_borrower2->getAuthorAndTitle(). PHP_EOL; // I don't have a book

$book_borrower->returnBook();

$book_borrower2->borrowBook();
echo $book_borrower2->getAuthorAndTitle(). PHP_EOL; // Design Pattery by Moin Hussain

?>