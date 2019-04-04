<?php
require '../bootloader.php';

$termometras = new App\SensorFartTemp();
$humidmetras = new App\SensorFartHumidity();
$sensors = new \App\Sensors();
$sensors->add('laipsniai', $termometras);
$sensors->add('dregnis', $humidmetras);

?>

<html>
    <body>
        <?php foreach ($sensors->getReadings() as $id => $sensor): ?>
            <h1><?php print $id; ?></h1>
            <h2><?php print $sensor; ?></h2>
        <?php endforeach; ?>
    </body>
</html>