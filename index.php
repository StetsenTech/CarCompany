<?php
    require 'Vehicle.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $vehicle1 = new Vehicle();
            $vehicle2 = new Motorcycle();

            $vehicle1->setDoors(10);
            echo $vehicle1->getDoors();
            echo '<br />';
            echo $vehicle2;

        ?>
    </body>
</html>