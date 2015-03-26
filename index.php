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
        
            use Company\Vehicles\Cars\Car;
            use Company\Vehicles\Truck\Truck;
            use Company\Vehicles\Motorcycle\Motorcycle;
            use Company\Vehicles\Cars\Sedan;
            use Company\Vehicles\Cars\HatchbackCar;
            
            $sports = new Car();
            $sedan = new Sedan();
            $concept = Car::vehicleProperties(0,3);
            $harvey = new Motorcycle();
            $pickup = Truck::changeWheels(16);
            $hatch = new HatchbackCar();

            echo $sports;
            echo $sedan;
            echo $harvey;
            echo $pickup;
            echo $concept; 
            echo $hatch;
        ?>
    </body>
</html>