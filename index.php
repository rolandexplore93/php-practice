<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Codes</title>
</head>
<body>
    <?php 
        $username = "Ogarolly"; // string type
        $school = "Anglia Ruskin University";
        $comment = "ARU is a great University with reputable Alumni";
        $sid = 2191141;  // number type
        $isAGrad = false;  // boolean type
        $cgpa = null;  // null type

        // Read about string functions in PHP
        echo ("Hello World");
        echo "<br />";
        echo "<h2>Summary</h2>";
        echo "This is $username, a PHP professional from $school";

        // String
        echo strtolower($comment);echo "<br />";
        echo strtoupper($school);echo "<br />";
        echo strlen($comment);echo "<br />";
        echo str_replace("University", "Howard", $school);echo "<br />";
        echo $school[0];echo "<br />";
        echo substr($comment, 8, 5);echo "<br />";

        // PHP Math functions
        echo abs(-21.47);echo "<br />";
        echo pow(3, 5);echo "<br />";
        echo sqrt(81);echo "<br />";
        echo max(14, 17, 5, 14); echo "<br />"; // Prints the biggest number
        echo min(17, 3, 14); echo "<br />";// Prints the lowest number
        echo round(4.6); echo "<br />";
        echo round(4.2); echo "<br />";
        echo ceil(4.1); echo "<br />";   // round a number up to the next integer
        echo floor(4.1); echo "<br />";   // round a number down to an integer
    ?>
</body>
</html>