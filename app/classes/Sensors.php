<?php 

class Sensors {
    
    private $sensors;
    
    public function add($id, App\Abstracts\Sensor $sensor) {
        $this->sensors[$id]=$sensor;
    }
    
    public function getReading($id) {
        return $this->sensors[$id];
    }
    
    public function getReadings(){
        return $this->sensors;
    }
}