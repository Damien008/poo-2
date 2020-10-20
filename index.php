<?php

require_once 'Bicycle.php';


$bike = new Bicycle('red', 4);
du camion



// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


require_once 'Car.php';

$car1 = new Car('red', 4, 'electric');
var_dump ($car1);

echo $car1->forward();
echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();

require_once 'Truck.php';

$truck1 = new Truck('yellow', 4, 200, 'fuel');
$truck1->setCharge(150);
var_dump ($truck1);

echo $truck1->filling() . '<br>';
echo $truck1->forward();
echo '<br> Vitesse du camion : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br> Vitesse du camion : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();