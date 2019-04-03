<?php

require '../bootloader.php';

$termometras = new App\SensorFartTemp();
print $termometras->read();
?>