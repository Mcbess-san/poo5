<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump(Car::ALLOWED_ENERGIES);