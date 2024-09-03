<?php

class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }
}

class Publisher {
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

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
        $details = [
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
        foreach ($details as $key => $value) {
            $result .= "$key: $value\n";
        }
        return $result;
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return "Book not found";
        }
    }
}


$author = new Author("Joko Widodo", "Seorang penulis dari Indonesia");
$publisher = new Publisher("Penerbit Indonesia", "Jl. Penerbit No. 1, Jakarta", "021-4567890");

$book = new Book(123456, "Pemrograman 101", "Panduan pemula untuk pemrograman", "Teknologi", "Bahasa Indonesia", 350, $author, $publisher);

echo $book->showAll();

$publisher->setPhone("0858-8888-8080");
echo "Updated Phone: " . $publisher->getPhone() . "\n";

$bookDetail = $book->detail(123456);
echo $bookDetail;

?>
