<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this-> availableCopies = $availableCopies;


    }

    public function getTitle() {
        return $this->title; 
    }

    public function getAvailableCopies(){
        return $this->availableCopies;

    }

    public function borrowBook(){
        if($this->availableCopies >0){
            $this->availableCopies --;
            return true;
        }
        return false;

    }

    public function returnBook(){
        $this->availableCopies ++;

    }

}

class Member{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this-> name;

    }

    public function borrowBook(Book $book){
       // return $this->book = $book;
        if($book ->borrowBook()){
            $this->name . " has borrowed '" . $book->getTitle() . "'\n";
    
        } else {
            "No copies available for '" . $book->getTitle() . "'.\n";
        }

    }

    public function returnBook(Book $book){
        $book->returnBook();
        $this->name . "has returned '" . $book->getTitle() . "'.\n";


    }
}

$book1 = new Book ("The Great Gatsby", 5);
$book2 = new Book ("To Kill a MockingBird", 3);



$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1 -> borrowBook($book1);
$member2-> borrowBook($book2);


echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies(). PHP_EOL;
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies(). PHP_EOL;
