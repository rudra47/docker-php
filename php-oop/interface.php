<?php 

interface InterfaceCar{
    public function setModel($model);
    public function getModel();
}

interface vehicle{
    public function setHasWheels($boolean);
    public function getHasWheels();
}

class miniCar implements InterfaceCar, vehicle{
    private $model;
    private $hasWheels;

    public function setModel($model){
        return $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }

    public function setHasWheels($boolean){
        $this->hasWheels = $boolean;
    }
    
    public function getHasWheels(){
        if ($this->hasWheels) {
            return "has wheels";
        }
        return "no wheels";
    }
}

$miniCar = new MiniCar();
$miniCar->setHasWheels(true);
echo $miniCar->getHasWheels();