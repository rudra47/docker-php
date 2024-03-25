<?php 

interface Animal {
    public function makeSound();
}

class Dog implements Animal{
    private $animalCaste;

    public function __construct($animalCaste) {
        $this->animalCaste = $animalCaste;
    }

    public function makeSound(){
        return $this->animalCaste."'s sound is bark....";
    }
}

class Cat implements Animal{
    private $animalCaste;

    public function __construct($animalCaste) {
        $this->animalCaste = $animalCaste;
    }

    public function makeSound(){
        return $this->animalCaste."'s sound is meow....";
    }
}

class Horse implements Animal{
    private $animalCaste;

    public function __construct($animalCaste) {
        $this->animalCaste = $animalCaste;
    }

    public function makeSound(){
        return $this->animalCaste."'s sound is squeak....";
    }
}

$cat = new Cat("Cat");
$dog = new Dog("Dog");
$horse = new Horse("Horse");

$animals = array($cat, $dog, $horse);

foreach ($animals as $animal) {
    echo $animal->makeSound()."<br>";
}