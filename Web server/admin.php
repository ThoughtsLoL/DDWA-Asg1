<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
<h3>Students</h3>
    <?php
    $connection = new mysqli("localhost","root", "","ddwa_asg1_database");

    $result = $connection->query("SELECT * FROM students");

    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){ 
            $n = $row["name"];
            $cn = $row["contactnumber"];
            $s = $row["school"];
            $ye= $row["yearenrolled"];
            echo $n ." ". $cn ." ". $s ." ". $ye . "<br>";
        }
    }
    ?>
    <br>
    <h3>Lectuerers</h3>
    <?php 
    $result = $connection->query("SELECT * FROM lecturers");

    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){ 
            $n = $row["name"];
            $dj = $row["datejoined"];
            $ol = $row["officelocation"];
            $cn = $row["contactnumber"];
            echo $n ." ". $dj ." ". $ol ." ". $cn . "<br>";

        }
    }
    ?>
</body>
</html>