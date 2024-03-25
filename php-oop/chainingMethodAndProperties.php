<?php 

class Car
{
    public $fuel;

    public function fill($fuel){
        $this->fuel = $fuel;

        return $this;
    }

    public function ride($miles) {
        $consumedGallon = $miles/50;
        $this->fuel -= $consumedGallon;

        return $this;
    }
}

$bmw = new Car();
echo 'The number of gallons left in the tank: '. $bmw->fill(10)->ride(170)->fuel.' gal. <br>';



// ----------------------------------------------------------------
// Practice 
// ----------------------------------------------------------------
class Users {
    public $firstName;
    public $lastName;

    public function hello(){
        echo 'Thanks, '. $this->firstName;
    }

    public function register(){
        echo $this->firstName. ' '. $this->lastName. ' registered. <br>';
        return $this;
    }

    public function mail(){
        echo ' emailed. <br>';
        return $this;
    }
}

$user1 = new Users();
$user1->firstName = 'John';
$user1->lastName = 'Doe';

$user1->register()->mail()->hello();