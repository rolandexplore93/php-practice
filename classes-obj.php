<?php 
/* Classes and Objects.
Class is a blueprint for creating a custom data type. On the other hand, Object is an instance of a class.
Objects are created based on the template set up using a class 
*/

class Car {
    // Define the attributes using var
    var $manufacturer;
    var $year;
    var $color;
    var $noOfSeat;
}

// Create an object for cars
$car1 = new Car;
$car2 = new Car;
// Initialize the properties/attributes of the car object created
$car1 -> manufacturer = "BMW";
$car1 -> year = 2023;
$car1 -> color = "Blue";
$car1 -> noOfSeat = 5;
$car2 -> manufacturer = "Honda";
$car2 -> year = 2013;
$car2 -> color = "Red";
$car2 -> noOfSeat = 5;

echo $car1 -> manufacturer;
echo $car1 -> year;
echo $car1 -> color;
echo $car1 -> noOfSeat;
echo $car2 -> manufacturer;
echo $car2 -> year;
echo $car2 -> color;
echo $car2 -> noOfSeat;


?>