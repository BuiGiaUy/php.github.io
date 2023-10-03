<?php
    interface Borrowable {
        public function borrow();
        public function returnItem();
    }

    Class Book implements Borrowable {
        private $title;
        private $author;
        private $isBorrowed;

        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
            $this->isBorrowed = false;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @param mixed $author
         */
        public function setAuthor($author)
        {
            $this->author = $author;
        }
        public function borrow()
        {
            if (!$this->isBorrowed ){
                $this->isBorrowed =true;
                return "Sách '{$this->title}' của '{$this->author}' đã được mượn.";
            }
            else {
                return "Sách '{$this->title}' đã được mượn từ trước, không thể mượn.";
            }

        }

        public function  returnItem()
        {
            if ($this->isBorrowed) {
                $this->isBorrowed = false;
                return "Sách '{$this->title}' đã được trả thành công.";
            } else {
                return "Sách '{$this->title}' không cần trả vì chưa được mượn.";
            }
        }
    }

    class Paper implements Borrowable {
        private $title;
        private $date;
        private $isBorrowed;

        public function __construct($title, $date)
        {
            $this->title = $title;
            $this->date = $date;
            $this->isBorrowed = false;
        }

        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @param mixed $date
         */
        public function setDate($date)
        {
            $this->date = $date;
        }

        public function borrow()
        {
            if (!$this->isBorrowed) {
                $this->isBorrowed =true;
                return "Giấy '{$this->title}' ngày '{$this->date}' đã được mượn.";

            } else {

            return "Giấy '{$this->title}' ngày '{$this->date}' đã được mượn và không thể mượn lại.";

            }
        }

        public function returnItem()
        {
            if ($this->isBorrowed) {
                $this->isBorrowed = false;
                return "Giấy '{$this->title}' ngày '{$this->date}' đã được trả lại thành công.";

            } else {

                return "Giấy '{$this->title}' ngày '{$this->date}' không cần phải trả lại vì nó không được mượn.";
            }

        }
    }


$book = new Book('Cơn Gió', 'Gia Uy');
echo $book->borrow();
echo "\n";
echo $book->returnItem();

$paper = new Paper('New Paper ', '2023-10-03');
echo $paper->borrow();
echo "\n";
echo $paper->returnItem();