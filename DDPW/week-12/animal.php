<?php
    class Animal {
        public $name;
        protected $age;
        private $color;

        public function __construct($name, $age, $color) {
            $this->name = $name;
            $this->age = $age;
            $this->color = $color;
        }

        public function getName() {
            return $this->name;
        }

        public function getAge() {
            return $this->age;
        }

        public function getColor() {
            return $this->color;
        }
    }

    $animal = new Animal("Animal", 1, "Color");

    echo "Name: " . $animal->getName() . "<br>";
    echo "Age: " . $animal->getAge() . "<br>";
    echo "Color: " . $animal->getColor() . "<br>";
?>