<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="search.php" method="get">
            <input type="text" name="search" id="">
            <input type="submit" name="submit" value="Search database">
        </form>
    </center>
    <?php 
        if ($a = isset($_REQUEST['submit'])){
            $search = $_GET['search'];
            $terms = explode(" ", $search); // explode() is an inbuilt PHP function that convert input into sentence and make an array with each word
            $query = "SELECT * FROM users WHERE ";

            $i = 0;
            foreach ($terms as $term) {
                $i++;

                // "SELECT * FROM users WHERE name LIKE '%Search' ";
                // "SELECT * FROM users WHERE or name LIKE '%Search' ";
                if ($i == 1){
                    $query .= "firstname LIKE '%$term%' ";
                } else {
                    $query .= "OR firstname LIKE '%$term%' ";
                }

                // connection to the database
                $dbconnection = new mysqli("localhost", "root", "", "testing");
                if ($dbconnection -> connect_error){
                    die("Connection failed. " . $dbconnection -> connect_error);
                }
                
                $query = mysqli_query($dbconnection, $query);
                $num = mysqli_num_rows($query);

                if ($num > 0 && $search != ""){

                    while($row = mysqli_fetch_assoc($query)){
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $email = $row['email'];
                        $password = $row['password'];

                        echo "$firstname <br /> $lastname <br /> $email";
                    }
                }
                else {
                    echo "No results found";
                }
                include('links.php');
                mysqli_close($dbconnection);

            }


        } else {
            echo "Type something";
        }
        
    ?>
</body>
</html>