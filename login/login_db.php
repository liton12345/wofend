<?php



if (isset($_POST['login'])) {

    include "config.php";

    $user = mysqli_real_escape_string($conn, ($_POST['user']));
    $password = md5($_POST['password']);




/*    function validate ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }*/

/*    // $user = validate($_POST['name']);
    $user = validate($_POST['user']);
    // $user = validate($_POST['email']);
    // $user = validate($_POST['phone']);
    $password = validate($_POST['password']);*/

    if (empty($user)) {
        header("Location: login.php?error=User Name is empty");
        exit();
    }elseif(empty(($password))) {
        header("Location: login.php?error=Password is empty");
        exit();
    }else {
        $sql = "SELECT * FROM db_table_name1 WHERE user='$user' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
        header("Location: /mcf/login/loding_page_login.html");
        }else{
            header("Location: /mcf/login/singup&login.php?error=User data not found");
        }
    }

}else{
    header("Location: login.php");
    exit();
}

?>