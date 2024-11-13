<?php
    class Circle implements Shape, Color {
        private $radius;
        private $color;

        public function __construct($radius, $color) {
            $this->radius = $radius;
            $this->color = $color;
        }

        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }

        public function getColor() {
            return $this->color;
        }
    }

    $circle = new Circle(5, "Red");

    class Rectangle implements Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea() {
            return $this->width * $this->height;
        }
    }

    function printArea(Shape $shape) {
        echo "Area: " . $shape->calculateArea() . "<br>";
    }

    $circle = new Circle(5, "Red");
    $rectangle = new Rectangle(4, 6);

    printArea($circle);
    printArea($rectangle);
?>