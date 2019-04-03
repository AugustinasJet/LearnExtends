<?php

namespace App;

class Sensors {

    private $sensors;
    
    public function __construct() {
        $this->sensors=[];
    }

    public function add($id, App\Abstracts\Sensor $sensor) {
        $this->sensors[$id] = $sensor;
    }

    public function getReading($id) {
        return $this->sensors[$id]->read();
    }

    public function getReadings() {
        $data = [];
        foreach ($this->sensors as $key => $sensor) {
            $data[$key]=$sensor->read();
        }
        return $data;
    }

}
