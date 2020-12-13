<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
</head>
<body>
<h3>Profile</h3>
    <?php
    $connection = new mysqli("localhost","root", "","ddwa_asg1_database");

    $result = $connection->query("SELECT * FROM students WHERE studentid = 0");
    // echo "Returned rows are: " . $result -> mysqli_num_rows;
    // $result -> free_result();
    //echo var_dump($result);
    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){ 
            $n = $row["name"];
            $cn = $row["contactnumber"];
            $s = $row["school"];
            $ye= $row["yearenrolled"];
            echo $n ." ". $cn ." ". $s ." ". $ye;
            //echo"<tr><td>".$c."/td><td>".$n."</td></tr>";
        }
    }
    ?>
</body>
</html>