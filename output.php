<?php 

$dbconnection = new mysqli("localhost", "root", "", "testing");
if ($dbconnection -> connect_error){
    die("Connection failed. " . $dbconnection -> connect_error);
}
// echo "Connection successful";

$all_users = mysqli_query($dbconnection, "SELECT * FROM users");

while ($row = mysqli_fetch_array($all_users)){
    echo $row['firstname'] ." ".$row['lastname'] ." ".$row['email'] ." ".$row['password'];
    echo "<br />";
}




mysqli_close($dbconnection);
include('links.php');

?>