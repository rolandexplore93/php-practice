<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "testing";

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($firstname && $lastname && $email && $password){

        // Create connection to the detabase
        $dbconnection = new mysqli($host, $user, $pass, $database);
        if ($dbconnection->connect_error) {
            die("Connection failed: " . $dbconnection->connect_error);
        };
        echo "Connected successfully";

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
        echo "You have to complete the form";
    }


    // Close connection everytime you end a script for security reason
    mysqli_close($dbconnection);
?>