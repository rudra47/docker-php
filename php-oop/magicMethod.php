<?php

class User {
    private $firstName;
    private $lastName;

    public function __construct($firstName=null, $lastName=null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->firstName. ' ' . $this->lastName. ' is the '.__CLASS__.' name';
    }
}

$user1 = new User("Jhon", "Doe");
echo $user1->getLastName();