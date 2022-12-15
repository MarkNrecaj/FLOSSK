<?php

use Book as GlobalBook;

class Author
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        print_r($this->name);
    }

    public function getAge()
    {
        print_r($this->age);
    }
}

 class CollectionBook implements Book
{
    private Author $author;
    private array $books; // move books into a new class( singular)

    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    
    
    public function getAuthor()
    {
        print_r($this->author);
    }
    
    public function addBook(string $book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        print_r($this->books);
    }

    public function deleteBook(string $title)
    {
        
        $this->books = array_filter($this->books, fn ($value) => $value !== $title);
        // ose
        // unset($this->books[array_search($title,$this->books)]);
        
    }
}
// class Book
// {
//     private $name;
//     private $category;
// }

interface Book
{
    public function getBooks();
    public function addBook(string $book);
}

$author = new Author("Elvis", 23);

// $author->getName();
// $author->getAge();

$book = new CollectionBook($author);

// $book->getAuthor();
$book->addBook("The power of now");
$book->addBook("Beni ecen vete");

$book->deleteBook("The power of now");

$book->getBooks();
