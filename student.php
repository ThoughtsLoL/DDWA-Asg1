<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
</head>
<body>
    <?php
    $connection = new mysqli("localhost","root", "","ddwa_asg1_database");

    // if(mysqli_connect_errno($connection)){
    //     echo "failed to connect";
    // }
    // else { echo " connection successful";}

    $result = $connection->query("SELECT * FROM category");
    // echo "Returned rows are: " . $result -> mysqli_num_rows;
    // $result -> free_result();
    //echo var_dump($result);
    if($result->num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $c = $row["categoryid"];
            $n = $row["name"];
            echo $c . $n;
            //echo"<tr><td>".$c."/td><td>".$n."</td></tr>";
        }
    }
    ?>
</body>
</html>