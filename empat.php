<?php

require_once 'Author.php';
// class Author {
//      public $name;
//      public $description;
 
//      public function __construct($name, $description) {
//          $this->name = $name;
//          $this->description = $description;
//      }
//  }

require_once 'Publisher.php';
//  class Publisher {
//      public $name;
//      public $address;
//      public $phone;
 
//      public function __construct($name, $address, $phone) {
//          $this->name = $name;
//          $this->address = $address;
//          $this->phone = $phone;
//      }
 
//      public function setPhone($phone) : void {
//          $this->phone = $phone;
//      }
 
//      public function getPhone() : int {
//          return $this->phone;
//      }
//  }

require_once 'Book.php';
//  class Book {
//      public $ISBN;
//      public $title;
//      public $description;
//      public $category;
//      public $language;
//      public $numberOfPage;
//      public $author;
//      public $publisher;
 
//      public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
//          $this->ISBN = $ISBN;
//          $this->title = $title;
//          $this->description = $description;
//          $this->category = $category;
//          $this->language = $language;
//          $this->numberOfPage = $numberOfPage;
//          $this->author = $author;
//          $this->publisher = $publisher;
//      }
 
//      public function showAll() {
//          $detail = [
//              "ISBN" => $this->ISBN,
//              "Title" => $this->title,
//              "Description" => $this->description,
//              "Category" => $this->category,
//              "Language" => $this->language,
//              "Number of Pages" => $this->numberOfPage,
//              "Author" => $this->author->name,
//              "Publisher" => $this->publisher->name
//          ];
 
//          $result = "";
//          foreach ($detail as $key => $value) {
//              $result .= "$key: $value\n";
//          }
//          return $result;
//      }
 
//      public function detail($ISBN) {
//          if ($this->ISBN == $ISBN) {
//              return $this->showAll();
//          } else {
//              return "Sorry, Book not found sir";
//          }
//      }
//  }
 
 
 $author = new Author("karim almurim", "Penulis berdarah jepang");
 $publisher = new Publisher("Penerbit jepang", "Jl.Shinzous no.10, Tokyo", "00-233-32-32");
 
 $book = new Book(123456, "Belajar berjalan", "Tata cara bagaimana kita dapat berjalan", "health", "Mandarin language", 100, $author, $publisher);
 
 echo $book->showAll();
 
 $publisher->setPhone("+638048474792");
 echo "Updated Phone: " . $publisher->getPhone() . "\n";
 
 $bookDetail = $book->detail(22222);
 echo $bookDetail;