<?php

$sname = "localhost";
$user = "root";
$password = "";

$db_table_name = "user_db";

$conn = mysqli_connect($sname, $user, $password, $db_table_name);

if (!$conn) {
     echo "connection failed";
}
?>