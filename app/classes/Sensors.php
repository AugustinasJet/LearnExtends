<?php

class Sensors {

    private $data;

    public function add($id, App\Abstracts\Sensor $sensor) {
        $this->data[$id] = $sensor;
    }

    public function getReading($id) {
        return $this->data[$id];
    }

    public function getReadings() {
        return $this->data;
    }

}
