<?php
class Car {
    // The $carModel property is now protected, so it can be accessed from within the class and its child classes
    protected $carModel;

    public function __construct($model = null) {
        $this->carModel = $model;
    }

    public function getCarModel() { 
        return $this->carModel; 
    }
}

class SportsCar extends Car {
    private $style = "fast and furious";

    public function driveWithStyle() {
        return "Drive a <i>". $this->carModel . "</i> ". $this->style; 
    }
}

$bmw = new SportsCar("bmw");
echo $bmw->driveWithStyle();



// ----------------------------------------------------------------
// Practice
// ----------------------------------------------------------------

Class User {
    private $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

class Admin extends User {
    public function expressYourRole(){
        return "Admin";
    }

    public function sayHello(){
        return "Hello admin, ". $this->getUsername();
    }
}

$user1 = new Admin();
$user1->setUsername("Balthazar");
echo $user1->sayHello();