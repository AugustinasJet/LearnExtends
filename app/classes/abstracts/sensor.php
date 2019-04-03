<?php

namespace App\Abstracts;

abstract class Sensor {

    private $reading;

    abstract protected function read();

    public function getLastReading() {
        return $this->reading;
    }

}
