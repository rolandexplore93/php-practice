<?php 
    // 1. CONSTANTS cannot be redefined once it has been defined.
    // VARIABLE can be redifen.
    $name = "Orobola Roland";
    define("Job", "Developer");
    define("SID", 2190455);
    $name = "Orobola Roland Ogundipe";
    // define("SID", "ARU: 21955");
    /* echo $name;
    echo SID; */

    // 2. Concatenation uses (.) symbol
    echo $name ." is a " .Job;

    // 3. Loops
    $score = 88;
    $studentNames = array("Roland", "Ade", "Bolaji");

    do {
        echo "The current score is " .$score++ ."<br />";
    } while ($score < 95);

    // foreach ($variable as $key => $value) {
    //     # code...
    // }
    // forEach()
    foreach($studentNames as $key => $value){
        echo $key ." = " .$value ."<br />";
    }

    // include("grades.php");
    // include_once("grades.php");
    // require "grades.php";
    // require_once "grades.php";
?>