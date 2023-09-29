<?php
    class Car {

        public $company;
        public $carNumberPlates;
        public $name;
        public $year;

        public function __construct($company,$carNumberPlates,$name,$year)
        {
            $this->company= $company;
            $this->carNumberPlates = $carNumberPlates;
            $this->name = $name;
            $this->year = $year;
        }
        public function showInfo() {
            echo "Car Info:\n";
            echo "Company: {$this->company}\n";
            echo "Car Number Plates: {$this->carNumberPlates}\n";
            echo "Name: {$this->name}\n";
            echo "Year: {$this->year}\n";
        }

    }

    $car = Car("audi","29 C1 29999","UY",2021);
    $car-> showInfo();