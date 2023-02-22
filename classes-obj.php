<?php 
/* Classes and Objects.
1. Class is a blueprint for creating a custom data type. On the other hand, Object is an instance of a class.
Objects are created based on the template set up using a class.
2. A Constructor is a function put inside a class. A constructor is called when we create an object of that class.
*/

class Car {
    // Define the attributes using var
    var $manufacturer;
    var $year;
    var $color;
    var $noOfSeat;

    function __construct($aManufacturer, $aYear, $aColor, $aNoOfSeat){
        // Initialize the properties/attributes using 'this' keyword.
        // 'this' keyword refers to the current class object
        $this -> manufacturer = $aManufacturer;
        $this -> year = $aYear;
        $this -> color = $aColor;
        $this -> noOfSeat = $aNoOfSeat;
    }
}

// Create an object of the class Car
// $car1 = new Car();
// $car2 = new Car();
// Create objects of the class Car using constructor approach
$car3 = new Car("Tesla", 2022, "Red", 5);
$car4 = new Car("SpaceX Tesla", 2023, "Indigo", 3);
$car5 = new Car("Toyota Corolla", 2012, "Wine", 6);
// Initialize the properties/attributes of the car object created
// $car1 -> manufacturer = "BMW";
// $car1 -> year = 2023;
// $car1 -> color = "Blue";
// $car1 -> noOfSeat = 5;
// $car2 -> manufacturer = "Honda";
// $car2 -> year = 2013;
// $car2 -> color = "Red";
// $car2 -> noOfSeat = 5;

// echo $car1 -> manufacturer;
// echo $car1 -> year;
// echo $car1 -> color;
// echo $car1 -> noOfSeat;
// echo $car2 -> manufacturer;
// echo $car2 -> year;
// echo $car2 -> color;
// echo $car2 -> noOfSeat;
echo $car3 -> manufacturer;
echo $car4 -> manufacturer;
echo $car5 -> manufacturer;


?>