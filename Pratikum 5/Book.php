<?php

class Book {
     public $ISBN;
     public $title;
     public $description;
     public $category;
     public $language;
     public $numberOfPage;
     public $author;
     public $publisher;

     public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
         $this->ISBN = $ISBN;
         $this->title = $title;
         $this->description = $description;
         $this->category = $category;
         $this->language = $language;
         $this->numberOfPage = $numberOfPage;
         $this->author = $author;
         $this->publisher = $publisher;
     }

     public function showAll() {
         $detail = [
             "ISBN" => $this->ISBN,
             "Title" => $this->title,
             "Description" => $this->description,
             "Category" => $this->category,
             "Language" => $this->language,
             "Number of Pages" => $this->numberOfPage,
             "Author" => $this->author->name,
             "Publisher" => $this->publisher->name
         ];

         $result = "";
         foreach ($detail as $key => $value) {
             $result .= "$key: $value\n";
         }
         return $result;
     }

     public function detail($ISBN) {
         if ($this->ISBN == $ISBN) {
             return $this->showAll();
         } else {
             return "Sorry, Book not found sir";
         }
     }
 }