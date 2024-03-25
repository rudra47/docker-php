<?php

class Car {
    private $carModel;
    private $allowedModel = ['marcedes', 'lambarghini', 'bmw'];

    public function setCarModel($model){
        if (in_array($model, $this->allowedModel)) {
            $this->carModel = $model;
        }
    }

    public function getCarModel(){
        if ($this->carModel) {
            return $this->carModel. " is a awasome car";
        }else{
            return "This model not in our service";
        }
    }
}

$bmw = new Car();
$bmw->setCarModel("toyota");

echo $bmw->getCarModel();