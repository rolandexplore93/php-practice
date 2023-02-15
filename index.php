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

    <!-- Basic calculator -->
    <!-- <div style="width: 300px; background: #ddd; padding: 5px 20px 20px; margin-bottom: 10px;">
        <h1>Basic calculator in PHP</h1>
        <form action="index.php" method="get">
            <input type="number" name="num1" placeholder="Enter a number">
            <input type="number" name="num2" placeholder="Enter a number">
            <button type="submit">Results</button>
        </form>
    </div> -->
    <!-- MADLIB GAME -->
    <div style="width: 300px; background: #ddd; padding: 5px 20px 20px; margin-bottom: 10px;">
        <h1>Build MadLib Game</h1>
        <form action="index.php" method="get">
            <input type="text" name="color" placeholder="Color">
            <input type="text" name="plural-noun" placeholder="Plural Noun">
            <input type="text" name="celebrity" placeholder="Celebrity Name">
            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- Get CHECKBOX values in PHP -->
    <div style="width: 300px; background: #ddd; padding: 5px 20px 20px; margin-bottom: 10px;">
        <h1>Checkbox values in PHP</h1>
        <form action="index.php" method="post">
            <p>Select Industry Preference for Investment</p>
            Technology: <input type="checkbox" name="industry[]" value="technology" >
            Accounting: <input type="checkbox" name="industry[]" value="accounting" >
            Energy: <input type="checkbox" name="industry[]" value="energy" >
            Finance: <input type="checkbox" name="industry[]" value="finance" >
            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- ASSOCIATIVE ARRAYS -->
    <!-- This array uses key-value pair to store data inside a variable -->
    <div style="width: 300px; background: #ddd; padding: 5px 20px 20px; margin-bottom: 10px;">
        <h1>Key-Value pair in PHP</h1>
        <form action="index.php" method="post">
            <p>Enter your student id to check your grade</p>
            <input type="text" name="grade">
            <button type="submit">Submit</button>
        </form>
    </div>
    
    <!-- PHP codes -->
    <?php 
        // Madlib codes
        $color = $_GET["color"];
        $pluralNoun = $_GET["plural-noun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";

        // ARRAYS in PHP
        $friends = array("Tobi", "Joy", "Frank");
        $friends[4] = "Roland";
        echo $friends[2];

        // Checkboxes codes
        $industry = $_POST["industry"];
        echo $industry[0];
        echo $industry[1];

        // Students' grades
        $grades = array("SID121" => "A+", "SID122" => "A+", "SID120" => "C", "SID125" => "B", "SID123" => "B+");
        echo $grades["SID122"];
        echo "HELLO";
        echo $grades[$_POST["grade"]];

        // Arithmetic
    ?>
    <!-- Addition: <?php echo $_GET["num1"] + $_GET["num2"]; ?> <br> -->
    <!-- Subtraction: <?php echo $_GET["num1"] - $_GET["num2"]; ?><br> -->
    <!-- Multiplication: <?php echo $_GET["num1"] * $_GET["num2"]; ?><br> -->
    <!-- Division: <?php echo $_GET["num1"] / $_GET["num2"]; ?><br> -->
    <!-- Remainder: <?php echo $_GET["num1"] % $_GET["num2"]; ?><br> -->

</body>
</html>