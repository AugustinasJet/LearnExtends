<?php

namespace App;

class SensorFartTemp extends Abstracts\Sensor {

    public function read() {
        return $this->reading = rand(0, 100) . '%';
    }

}