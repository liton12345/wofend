<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
</head>
<body>
    <?php 
    
    $sql = "SELECT * FROM db_table_name1";

    $result = mysqli_query($conn , $sql) or die("Problem");

    while ($row = mysqli_fetch_assoc($result)) {
    
    ?>
 <h3> Hi <?php echo $row['name']; ?> </h3>
 <?php } ?>
</body>
</html>