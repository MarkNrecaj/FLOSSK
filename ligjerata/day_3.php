<?php

class Author
{

    public function __construct(
        private string $firstName,
        private string $lastName,
        private int $age,
        private Book $book
    ) {
    }

    public function getBook()
    {
        return $this->book;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    // public function setLastName($lastName)
    // {
    //     $this->lastName = $lastName;
    // }

    public function getLastName()
    {
        return $this->lastName;
    }



    public function getAge()
    {
        return $this->age;
    }
}

class Book
{
    private array $books; // move books into a new class( singular)

    public function __construct(
        private string $title,
        // private array $books
    ) {
    }

    public function addBook(string $book)
    {
        $this->books[] = $book;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$book = new Book('Don Kishoti');
$book = new Book('pse');


print_r($book);
// print_r($book->getTitle());

$author = new Author('Sterjo', 'Spasse', 21, $book);

print_r($author);
