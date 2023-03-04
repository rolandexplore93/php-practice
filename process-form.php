<?php 
 //  1. Validate and Process Form Input
//  echo $_POST["firstname"]."<br>";
//  echo $_POST["lastname"]."<br>";
//  echo $_POST["email"]."<br>";
//  echo $_POST["password"]."<br>";
//  echo $_POST["confirmPassword"]."<br>";
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];

// Form validation
if ($_POST["firstname"]){
    if ($_POST["lastname"]) {
        if ($_POST["email"]) {
            if ($_POST["password"]) {
                if ($_POST["confirmPassword"]) {
                    if ($_POST["password"] == $_POST["confirmPassword"]) {
                        echo "Your details have been submitted successfully. Confirm your information below; <br>";
                        echo $_POST["firstname"]."<br>";
                        echo $_POST["lastname"]."<br>";
                        echo $_POST["email"]."<br>";
                        echo $_POST["password"]."<br>";
                        echo $_POST["confirmPassword"]."<br>"; 

                        // Connect to the db
                        // mysql_connect("localhost", "root", "") or die("Unable to connect to the database!");
                        // mysql_select_db("testsite");
                        // mysql_query("INSERT INTO user(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')");
                        // $registered = mysql_affected_rows();
                        // echo $registered;
                    } else {
                        echo "Password doesn't match";
                    }
                } else {
                    echo "Please, re-enter your password";
                }
            } else {
                echo "Password is required";
            }
        } else {
            echo "A valid email is required";
        }
    } else {
        echo "Please, enter your lastname";
    }

    // $firsname = $_POST["firstname"];
    // $lastname = $_POST["lastname"];
    // $email = $_POST["email"];
    // $password = $_POST["password"];
    
} else {
    echo "Please, enter your firstname";
}




?>