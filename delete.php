<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dbconnection = new mysqli("localhost", "root", "", "testing");
        if ($dbconnection -> connect_error){
            die("Connection failed. " . $dbconnection -> connect_error);
        }

        mysqli_close($dbconnection);
        include('links.php');
    ?>
    <form action="deleteCompleted.php" method="post">
        <p>Are you sure you want to delete <?php echo $_REQUEST["firstnames"] ?> <?php echo $_REQUEST["lastnames"] ?> account?</p>
        <button type="submit">Yes</button>
        <input type="hidden" name="id" value="<?php echo $_REQUEST['ids'] ?>">
    </form>

    
</body>
</html>