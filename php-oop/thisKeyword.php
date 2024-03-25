<?php

class User 
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function hello(){
        return 'Hello, '. $this->firstName . ' ' . $this->lastName;
    }
}

$user1 = new User("Rudra", "Sen");

echo $user1->hello();
