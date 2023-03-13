<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h3>Edit User: <?php echo $_REQUEST["firstnames"]; ?> </h3>
    <form action="change.php" method="post">
        <p>Firstname: <input type="text" name="updatedfirstname" value="<?php echo $_REQUEST["firstnames"] ?>" ></p>
        <p>Lastname: <input type="text" name="updatedlastname" value="<?php echo $_REQUEST["lastnames"] ?>" ></p>
        <p>Email: <input type="email" name="updatedEmail" value="<?php echo $_REQUEST["emails"] ?>" ></p>
        <p>Password: <input type="password" name="updatedPassword" value="<?php echo $_REQUEST["passwords"] ?>" ></p>
        <input type="submit" value="Save & Update">
        <input type="hidden" name="id" value="<?php echo $_REQUEST["ids"] ?>">
    </form>
    <?php include('links.php'); ?>

</body>
</html>