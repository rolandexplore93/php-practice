<?php 
 //  1. Validate and Process Form Input
//  echo $_POST["firstname"]."<br>";
//  echo $_POST["lastname"]."<br>";
//  echo $_POST["email"]."<br>";
//  echo $_POST["password"]."<br>";
//  echo $_POST["confirmPassword"]."<br>";

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
} else {
    echo "Please, enter your firstname";
}




?>