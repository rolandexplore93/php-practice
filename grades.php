<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php @include "header.html" ?>
    <form action="grades.php" method="post">
        <h1>Grades and meaning</h1>
        <input type="text" name="grades" placeholder="Enter grades">
        <button type="submit">Submit</button>
    </form>
    
    <?php
        // Switch statement
        $grades = strtoupper($_POST["grades"]);

        switch($grades){
            case("A"):
                echo "Excellent";
                break;
            case("B"):
                echo "Good";
                break;
            case("C"):
                echo "Satisfactory";
                break;
            case("D"):
                echo "Average";
                break;
            case("F"):
                echo "FAIL!";
                break;
            default:
                echo "Grade doesn't exist.";
        }

    ?>
    <?php @include "footer.html" ?>
    <?php 
        $name = "Roland";
        $university = "ARU";
        
        @include "banner.php"; 
    
    ?>

</body>
</html>