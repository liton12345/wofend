<?php

include "config.php";

if (isset($_POST['user']) && isset($_POST['password'])) {

    function validate ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $user = validate($_POST['user']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $password = md5(validate($_POST['password']));

    if (empty($user)) {
        header("Location: login.php?error=User Name is empty");
        exit();
    }elseif(empty(($password))) {
        header("Location: login.php?error=Password is empty");
        exit();
    }else {
  

        $sql = "SELECT * FROM db_table_name1 WHERE user='$user' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: singup.php?error=user alrady taken");
            exit();
        }

        $sql2 = "INSERT INTO db_table_name1(name, user, email, phone, password) VALUES ('$name','$user','$email','$phone','$password')";

        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
             header("Location: /mcf/login/loding_page_singup.html");
            exit();
        }
    }

}else{
    header("Location: login.php");
    exit();
}

?>