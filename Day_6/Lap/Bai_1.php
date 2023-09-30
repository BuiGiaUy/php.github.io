<?php
    class Book {
        private $id;
        private $title;
        private $author;
        private $publicationYear;
        private $imageReview;
        private $type;
        public function __construct($id, $title, $author, $publicationYear,$imageReview,$type)
        {
            $this -> id = $id;
            $this -> title = $title;
            $this -> author= $author;
            $this -> publicationYear = $publicationYear;
            $this -> imageReview = $imageReview;
            $this -> type = $type;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function setAuthor($author) {
            $this->author = $author;
        }

        public function setPublicationYear($publicationYear) {
            $this->publicationYear = $publicationYear;
        }

        public function setType($type) {
            $this->type = $type;
        }

        public function setImageReview($imageReview) {
            $this->imageReview = $imageReview;
        }

        public function getId() {
            return $this->id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getAuthor() {
            return $this->author;
        }

        public function getPublicationYear() {
            return $this->publicationYear;
        }

        public function getType() {
            return $this->type;
        }

        public function getImageReview() {
            return $this->imageReview;
        }
    }

    class Library {
        private $books;
        public function __construct()
        {
            $this ->books = [];
        }
        public function setBooks($books)
        {
            $this->books = $books;
        }
        public function getBooks()
        {
            return $this->books;
        }


        public function addBook($book)
        {
            $this->books[] = $book;
        }
        public function searchBookById($id) {
            $index = -1;
            for ($i= 0; $i <count($this -> books); $i++) {
                if ($this->books[$i] -> getId() == $id)
                    return $i;
            }
            return $index;

        }
        public function searchBookByTitle($title) {
            $index = -1;
            for ($i = 0; $i < count($this->books); $i++) {
                if ($this->books[$i]->getTitle() == $title) {
                    return $i;
                }
            }
            return $index;
        }
        public function searchBookByAuthor($author) {
            $index = -1;
            for ($i=0; $i<count($this->books); $i++)
                if ($this->books[$i]->getAuthor() == $author)
                    return $i;
            return $index;
        }
        public function removeBook($book)
        {
            $index = $this->searchBookById($book->getId());
            if ($index != -1) {
                array_splice($this->books, $index, 1); // Use array_splice to remove 1 element at $index
            }
        }
    }
    class User {
        private $id;
        private $fullName;

        public function __construct($id, $fullName)
        {
            $this -> id = $id;
            $this -> fullName = $fullName;
        }
        public function getFullName()
        {
            return $this->fullName;
        }
        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }
    }

    class Loan {
        private $user;
        private $book;
        private $dueDate;

        public function __construct($user, $book, $dueDate)
        {
            $this->book = $book;
            $this->user = $user;
            $this->dueDate = $dueDate;
        }
        public function getUser()
        {
            return $this->user;
        }

        public function getBook()
        {
            return $this->book;
        }
        public function getDueDate()
        {
            return $this->dueDate;
        }
        public function setDueDate($dueDate) {  // Thêm phương thức setDueDate()
            $this->dueDate = $dueDate;
        }

        public function setBook($book) {  // Thêm phương thức setBook()
            $this->book = $book;
        }
        public function setUser($user) {  // Thêm phương thức setUser()
            $this->user = $user;
        }
    }

    $user = new User(1, 'John Doe');

    $book1 = new Book(1, 'Trên Đường Băng', 'Nhật Chí', 1925, 'image1.jpg', 'paperBook');
    $book2 = new Book(2, 'Đắc Nhân Tâm', 'Gia Uy', 1960, 'image2.jpg', 'eBook');

    $library = new Library();
    $library->addBook($book1);
    $library->addBook($book2);

    // Tìm cuốn sách theo ID
    $bookId = 1;
    $index = $library->searchBookById($bookId);
    if ($index != -1) {
        echo 'Tìm thấy cuốn sách theo ID tại chỉ số ' . $index . "\n";
        $book = $library->getBooks()[$index];
        echo 'Tiêu đề: ' . $book->getTitle() . "\n";
    } else {
        echo 'Không tìm thấy cuốn sách theo ID.' . "\n";
    }

    $library->removeBook($book1);

    $title = 'Đắc Nhân Tâm';

    $index = $library->searchBookByTitle($title);

    if ($index != -1) {
        echo 'Tìm thấy cuốn sách theo tiêu đề tại chỉ số ' . $index . "\n";
        $book = $library->getBooks()[$index];
        echo 'Tác giả: ' . $book->getAuthor() . "\n";
    } else {
        echo 'Không tìm thấy cuốn sách theo tiêu đề.' . "\n";
    }

    $dueDate = '2023-10-15';
    $loan = new Loan($user, $book2, $dueDate);

    echo 'User: ' . $loan->getUser()->getFullName() . "\n";
    echo 'Book Title: ' . $loan->getBook()->getTitle() . "\n";
    echo 'Due Date: ' . $loan->getDueDate() . "\n";