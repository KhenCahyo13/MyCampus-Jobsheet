<?php
    class Cat extends Animal {
        public function meow() {
            echo $this->name . " says meow! <br>";
        }
    }

    class Dog extends Animal {
        public function bark() {
            echo $this->name . " says woof! <br>";
        }
    }

    $cat = new Cat("Whiskers");
    $dog = new Dog("Budy");

    $cat->eat();
    $dog->sleep();

    $cat->meow();
    $dog->bark();
?>