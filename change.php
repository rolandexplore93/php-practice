<?php
    $id = $_REQUEST["id"];
    $firstname = $_REQUEST["updatedfirstname"];
    $lastname = $_REQUEST["updatedlastname"];
    $email = $_REQUEST["updatedEmail"];
    $password = $_REQUEST["updatedPassword"];
    echo $email;

    $dbconnection = new mysqli("localhost", "root", "", "testing");
    if ($dbconnection -> connect_error){
        die("Connection failed. " . $dbconnection -> connect_error);
    }

    mysqli_query($dbconnection, "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password='$password' WHERE id='$id' ");

    echo "You have successfully updated this data";

    mysqli_close($dbconnection);

    include('links.php');
?>