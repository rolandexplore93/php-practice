<?php 

    $dbconnection = new mysqli("localhost", "root", "", "testing");
    if ($dbconnection -> connect_error){
        die("Connection failed. " . $dbconnection -> connect_error);
    }
    // echo "Connection successful";

    $all_users = mysqli_query($dbconnection, "SELECT * FROM users");

    echo "
    <table width=\"90%\" align=center border=2>
        <tr>
            <td width=\"5%\" align=center bgcolor=\"FFFFOO\">ID</td>
            <td align=center bgcolor=\"FFFFOO\">Firstname</td>
            <td align=center bgcolor=\"FFFFOO\">Lastname</td>
            <td align=center bgcolor=\"FFFFOO\">Email</td>
            <td align=center bgcolor=\"FFFFOO\">Password</td>
        </tr>";

        while ($row = mysqli_fetch_array($all_users)){
            $id = $row["id"];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $email = $row["email"];
            $password = $row["password"];
            // echo $row['firstname'] ." ".$row['lastname'] ." ".$row['email'] ." ".$row['password'];
            echo "<tr>
                <td width=\"5%\" align=center><a href=\"edit.php?ids=$id&firstnames=$firstname&lastnames=$lastname&emails=$email&passwords=$password\">$id</a></td>
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$email</td>
                <td>$password</td>
            </tr>";
        };

    echo "</table>";



    mysqli_close($dbconnection);
?>