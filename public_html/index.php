<?php
require '../bootloader.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/style.css">
        <title>p00Party</title>

    </head>
    <body class="<?php print $party->partyStatus(); ?>">
        <h1>P-00PARTY</h1>
        <h2><?php print $party->partyStatus(); ?></h2>
        <div>
            <?php foreach ($gerimu_arr->loadAll() as $kokteilis): ?>
                <div class="user-element">
                    <h2><?php print $kokteilis->getName(); ?></h2>
                    <p>Abarotai: <?php print $kokteilis->getAbarot(); ?></p>
                    <p>Kiekis: <?php print $kokteilis->getAmount(); ?></p>
                    <img src="<?php print $kokteilis->getImage(); ?>">
                </div>
            <?php endforeach; ?> 
        </div>
        <div>
            <?php foreach ($zmoniu_arr->loadAll() as $user): ?>
                <div class="user-element">
                    <h3>User name: <?php print $user->getUserName(); ?></h3>
                    <p>Email: <?php print $user->getEmail(); ?></p>
                    <p>Full name: <?php print $user->getFullName(); ?></p>
                    <p>Age: <?php print $user->getAge(); ?></p>
                    <p>Gender: <?php print $user->getGenderOptions()[$user->getGender()]; ?></p>
                    <p>Orientation: <?php print $user->getOrientationOptions()[$user->getOrientation()]; ?></p>
                    <img class="kokteilis-img" src="<?php print $user->getPhoto(); ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>