<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
   
    $sub1 = $_POST['sub1'];
    $marks1 = $_POST['marks1'];
    $sub2 = $_POST['sub2'];
    $marks2 = $_POST['marks2'];
    $sub3 = $_POST['sub3'];
    $marks3 = $_POST['marks3'];
    $sub4 = $_POST['sub4'];
    $marks4 = $_POST['marks4'];
    $sub5 = $_POST['sub5'];
    $marks5 = $_POST['marks5'];
    $sub6 = $_POST['sub6'];
    $marks6 = $_POST['marks6'];
   
    $sql = "INSERT INTO `trip`.`trip` (`sub1`, `marks1`, `sub2`, `marks2`, `sub3`, `marks3`, `sub4`, `marks4`, `sub5`, `marks5`, `sub6`, `marks6`) VALUES (`$sub1`, `$marks1`, `$sub2`, `$marks2`, `$sub3`, `$marks3`, `$sub4`, `$marks4`, `$sub5`, `$marks5`, `$sub6`, `$marks6`, current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<nav>
            <a href="welcome.php">
                <h2>Mark-Sheet</h2>
            </a>
            <div class="nav_links">
                <ul>
                    <li><a href="welcome.php">Home</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>

                </ul>
            </div>
        </nav>
    <img class="bg" src="bg.jpg" alt="student photo">
    <div class="container">
        <h1>Please Enter Your Subject Names and Marks</h3>
       
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="welcome.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="usn" id="usn" placeholder="Enter Your USN">
            <input type="text" name="sub1" id="sub1" placeholder="Enter the name of subject 1">
            <input type="text" name="marks1" id="marks1" placeholder="Enter the Marks of sub 1">
            <input type="text" name="sub2" id="sub2" placeholder="Enter the name of subject 2">
            <input type="text" name="marks2" id="marks2" placeholder="Enter the Marks of sub 2">
            <input type="text" name="sub3" id="sub3" placeholder="Enter the name of subject 3">
            <input type="text" name="marks3" id="marks3" placeholder="Enter the Marks of sub 3">
            <input type="text" name="sub4" id="sub4" placeholder="Enter the name of subject 4">
            <input type="text" name="marks4" id="marks4" placeholder="Enter the Marks of sub 4">
            <input type="text" name="sub5" id="sub5" placeholder="Enter the name of subject 5">
            <input type="text" name="marks5" id="marks5" placeholder="Enter the Marks of sub 5">
            <input type="text" name="sub6" id="sub6" placeholder="Enter the name of subject 6">
            <input type="text" name="marks6" id="marks6" placeholder="Enter the Marks of sub 6">
  
           
            <button class="btn">Submit</button> 
            <button onclick="window.print();" class="btn btn-primary">Print</button>
        </form>
    </div>

    
    
    
</body>
</html>