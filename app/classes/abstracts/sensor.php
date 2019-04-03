<?php

namespace App\Abstracts;

abstract class Sensor {

    private $reading;

    abstract protected function read();

    protected function getLastReading() {
        return $this->reading;
    }

}
