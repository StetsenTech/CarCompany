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
        
            use Company\Vehicles\Car;
            use Company\Vehicles\Truck;
            use Company\Vehicles\Motorcycle;
            
            $sports = new Car();
            $sedan = Car::vehicleProperties(4,4);
            $harvey = new Motorcycle();
            $pickup = Truck::changeWheels(16);

            echo $sports;
            echo $sedan;
            echo $harvey;
            echo $pickup;
        ?>
    </body>
</html>