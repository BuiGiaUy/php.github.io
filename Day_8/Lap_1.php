<?php
    interface Shape {
        public function calculatePerimeter();
        public function calculateArea();
    }
    class Rectangle implements Shape {
        private $length;
        private $width;

        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }

        public function calculatePerimeter() {
            return 2 * ($this->length + $this->width);
        }

        public function calculateArea() {
            return $this->length * $this->width;
        }
    }
    class Square implements Shape {
        private $side;

        public function __construct($side) {
            $this->side = $side;
        }

        public function calculatePerimeter() {
            return 4 * $this->side;
        }

        public function calculateArea() {
            return $this->side * $this->side;
        }
    }
    $rectangle = new Rectangle(5, 10);
    echo "Chu vi hình chữ nhật: " . $rectangle->calculatePerimeter() . "\n";
    echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea() . "\n";

    $square = new Square(7);
    echo "Chu vi hình vuông: " . $square->calculatePerimeter() . "\n";
    echo "Diện tích hình vuông: " . $square->calculateArea() . "\n";