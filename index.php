<?php


require "vendor/autoload.php";

use Florence\User;
use Florence\Car;
$car = Car::destroy(8);

var_dump($car);

//$car = Car::find(3);
//print_r($car);
//$car = new Car();
//$car->brand = "toyota";
//$car->color = "blue";
//$car->price = "6000";

//$car->save();


//
//$user = User::find(6);
//$user->first_name = "Prosper";
//$user = User::getAll();
//print_r($user);


//$user = new User();
//$user->first_name = "Florence";
//$user->last_name = "Okosun";
//$user->stack = "None";
//
//$user->save();







