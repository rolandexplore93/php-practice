<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "testing";

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST['confirmPassword'];

    if ($firstname && $lastname && $email && $password && $confirmPassword){

        if ($password == $confirmPassword){
            
            // Create connection to the detabase
            $dbconnection = new mysqli($host, $user, $pass, $database);
            if ($dbconnection->connect_error) {
                die("Connection failed: " . $dbconnection->connect_error);
            };
    
            // Check for duplicate email
            $duplicateEmail = mysqli_query($dbconnection, "SELECT email FROM users WHERE email='$email' ");
            $count = mysqli_num_rows($duplicateEmail);
            echo $count;
            if ($count != 0 ){
                include "links.php";
                die("<b>Email already exist! Please, register with a new email. </b>");
            }
    
            $addUser = "insert into users(firstname, lastname, email, password) values('$firstname', '$lastname', '$email', '$password')";
            $executeQuery = mysqli_query($dbconnection, $addUser);
            if ($executeQuery){
                echo "User added successfully";
            } else {
                echo "Error: " . "<br>" . mysqli_error($dbconnection);
            }
    
            $affected_rows = mysqli_affected_rows($dbconnection);
            echo "Number of affected rows: " . $affected_rows;
        } else {
            include "links.php";
            die("<b>Password doesn't match</b>");

        };

    } else {
        die("You have to complete the form");
    }


    // Close connection everytime you end a script for security reason
    include('links.php');
    mysqli_close($dbconnection);
?>