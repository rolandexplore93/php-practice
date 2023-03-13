<?php 
    $dbconnection = new mysqli("localhost", "root", "", "testing");
    if ($dbconnection -> connect_error){
        die("Connection failed. " . $dbconnection -> connect_error);
    }

    mysqli_query($dbconnection, "DELETE FROM users WHERE id='".$_REQUEST['id']."' ");
    echo "User deleted successfully";

    mysqli_close($dbconnection);
    include('links.php');
?>