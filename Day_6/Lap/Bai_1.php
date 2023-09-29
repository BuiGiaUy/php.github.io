<?php
    class Book {
        private $id;
        private $title;
        private $author;
        private $publicationYear;
        private $imageReview;
        private $type;
        public function __construct($id, $title, $author, $publicationYear,$type,$imageReview)
        {
            $this -> id = $id;
            $this -> title = $title;
            $this -> author= $author;
            $this -> publicationYear = $publicationYear;
            $this -> type = $type;
            $this -> imageReview = $imageReview;
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
        public function __construct($books)
        {
            $this ->books = $books;
        }
        public function getBooks() {
            return $this->books;
        }

        public function setBooks($books) {
            $this->books = $books;
        }
        public function addBook($book) {
            $this->books[] = $book;
        }

        public function deleteBook($bookTitle) {
            foreach ($this->books as $key => $book) {
                if ($book->getTitle() === $bookTitle) {
                    unset($this->books[$key]);
                    return true;
                }
            }
            return false;
        }
    }