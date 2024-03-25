<?php

abstract class AbstractCar{
    protected $tookFuel;
    protected $mileage;
    protected $brand;

    public function setTookFuel($fuel){
        $this->tookFuel = $fuel;
    }

    public function setMileage($mileage){
        return $this->mileage = $mileage;
    }

    public function setBrand($brand){
        return $this->brand = $brand;
    }

    abstract public function calculateMilesOnFuel();
}

class MilageCalculation extends AbstractCar{
    public function calculateMilesOnFuel(){
        return $this->tookFuel * $this->mileage;
    }

    public function carDetails(){
        return $this->brand . "'s mileage is ". $this->calculateMilesOnFuel(). " miles in ". $this->tookFuel ." gallon fuel";
    }
}

$bmw = new MilageCalculation();
$bmw->setBrand("BMW");
$bmw->setMileage(35);
$bmw->setTookFuel(10);

echo $bmw->carDetails();