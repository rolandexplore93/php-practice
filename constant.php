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

        // Create connection
        $conn = new mysqli($host, $user, $pass, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        echo "Connected successfully";
        $executeQuery = mysqli_query($conn, ("insert into users(firstname, lastname, email, password) values('$firstname', '$lastname', '$email', '$password')"));
        if ($executeQuery){
            echo "User added successfully";
        } else {
            echo "Error: " . "<br>" . mysqli_error($conn);
        }

        // $registered = mysqli_affected_rows($conn);
        // echo $registered;
    



    } else {
        echo "You have to complete the form";
    }


    // Close connection
    mysqli_close($conn);
?>