<?php
    abstract class Shape {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        abstract public function calculateArea();
    }
    class Circle extends Shape {
        private $radius;

        public function __construct($name, $radius) {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * $this->radius * $this->radius;
        }
    }
    class Square extends Shape {
        private $side;

        public function __construct($name, $side) {
            parent::__construct($name);
            $this->side = $side;
        }

        public function calculateArea() {
            return $this->side * $this->side;
        }
    }
    $circle = new Circle('Circle', 5);
    echo "Area of Circle: " . $circle->calculateArea() . "\n";

    $square = new Square('Square', 7);
    echo "Area of Square: " . $square->calculateArea() . "\n";