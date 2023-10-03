<?php
    interface Readable {
        public function read();
    }

    interface Borrowable {
        public function borrow();
        public function returnBook();
    }

    class Book {
        private $title;
        private $author;

        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getAuthor() {
            return $this->author;
        }


    }

    class Ebook extends Book implements Readable {

        public function read() {
            return "Đọc sách điện tử: '{$this->getTitle()}' của '{$this->getAuthor()}'.";
        }
    }

    class PaperBook extends Book implements Readable {
        public function read() {
            return "Đọc sách: '{$this->getTitle()}' của '{$this->getAuthor()}'.";
        }
    }

    class Library implements Borrowable {
        public function borrow() {
            return "Mượn sách.";
        }

        public function returnBook() {
            return "Trả sách.";
        }
    }

    class User implements Borrowable {
        public function borrow() {
            echo "Người dùng đang mượn sách.";
        }

        public function returnBook() {
            echo "Người dùng đang trả sách.";
        }
    }


