<?php
    class Book {
        private $id;
        private $title;
        private $author;
        private $publicationYear;
        private $imageReview;
        private $type;
        public function __construct($id, $title, $author, $publicationYear, $imageReview, $type)
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
        public function printBookInfo() {
            echo "Tiêu đề: {$this->title}\n";
            echo "Tác giả: {$this->author}\n";
            echo "Năm xuất bản: {$this->publicationYear}\n";
        }
    }

    class PaperBook extends Book {
        private $weight;

        public function __construct($id, $title, $author, $publicationYear, $imageReview, $type, $weight)
        {
            parent::__construct($id, $title, $author, $publicationYear, $imageReview, $type);
            $this->weight = $weight;
        }
        public function getWeight() {
            return $this->weight;
        }
        public function setWeight($weight) {
            return $this->weight = $weight;
        }

        public function printBookInfo()
        {
            parent::printBookInfo();
            echo "Weight: {$this->weight} kg\n";
        }

    }

    class eBook extends Book {
        private $fileSize;
        public function __construct($id, $title, $author, $publicationYear, $imageReview, $type, $fileSize)
        {
            parent::__construct($id, $title, $author, $publicationYear, $imageReview, $type);
            $this->fileSize =$fileSize;
        }
        public function setFileSize($fileSize)
        {
            $this->fileSize = $fileSize;
        }
        public function getFileSize()
        {
            return $this->fileSize;
        }
        public function printBookInfo() {
            parent::printBookInfo();
            echo "File Size: {$this->fileSize} MB\n";
        }

    }

    $paperBook = new PaperBook(1, "Paper Book Title", "Paper Book Author", 2022, "paperbook_image.jpg", "Paperback", 1.5);
    $paperBook->setWeight(1.2);

    $eBook = new EBook(2, "EBook Title", "EBook Author", 2021, "ebook_image.jpg", "EBook", 10);
    $eBook->setFileSize(5);

    $paperBook->printBookInfo();
    echo "Weight: {$paperBook->getWeight()} kg\n";

    $eBook->printBookInfo();
    echo "File Size: {$eBook->getFileSize()} MB\n";