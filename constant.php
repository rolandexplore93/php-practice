<?php 
    $user = "root";
    $pass = "";
    $dbname = "testing";

    $db = new mysqli("localhost", $user, $pass, $dbname) or die("Unable to connect to database");
    echo "Connection to MySQL database completed."


?>