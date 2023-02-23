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
// echo $car3 -> manufacturer;
// echo $car4 -> manufacturer;
// echo $car5 -> manufacturer;

class Student {
    var $name;
    var $department;
    var $gpa;

    function __construct($studentName, $studentDept, $studentGpa){
        $this -> name = $studentName;
        $this -> department = $studentDept;
        $this -> gpa = $studentGpa;
    }

    function hasHonors(){
        // PHP doesn't return Boolean True or False. Instead, represent True or False with a string
        if ($this -> gpa >= 3.5) return "true";
        return "false";
    }
}

$student1 = new Student("Roland", "ICT", 4.9);
$student2 = new Student("Bola", "Computer Science", 4.91);
$student3 = new Student("Adebisi", "AI", 2.9);
$student4 = new Student("Johnson", "ICT", 3.99);

// echo $student1 -> hasHonors();
// echo $student2 -> hasHonors();
// echo $student3 -> hasHonors();
// echo $student4 -> hasHonors();

// GETTER AND SETTER IN PHP
/* Getter and Setter are special functions created inside a class
to control the level of access that people have on the attributes of a class
*/
class Movie {
    public $title;
    private $rating;

    function __construct($title, $rating){
        $this -> title = $title;
        $this -> rating = $rating;
    }
}

$avengers = new Movie("Avengers", "PG-13");
// $avengers -> rating = "Doough";
echo $avengers -> rating;


?>