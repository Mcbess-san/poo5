<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
$bicycle->setCurrentSpeed(5);
echo $bicycle->switchOn();
var_dump($bicycle);



require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->switchOn();
var_dump(Car::ALLOWED_ENERGIES);