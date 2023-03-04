<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="process-form.php" method="post">
        <h3>Sign up information</h3>
        <label for="">Firstname:</label><input type="text" name="firstname" id=""><br>
        <label for="">Lastname:</label><input type="text" name="lastname" id=""><br>
        <label for="">Email:</label><input type="email" name="email" id=""><br>
        <label for="">Password:</label><input type="password" name="password" id=""><br>
        <label for="">Confirm Password:</label><input type="password" name="confirmPassword" id=""><br>
        <button type="submit">Submit</button>
        <!-- <input type="submit" value="Send"> -->
    </form>
</body>
</html>