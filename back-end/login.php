<?php
/**
 * Created by IntelliJ IDEA.
 * User: galihparyanto
 * Date: 24/10/20
 * Time: 10.18
 */

include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT username FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);
//    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['login_user'] = $username;
        $sql = "UPDATE FROM user SET timestamp = ".time()."WHERE username = ".$username;
        mysqli_query($db, $sql);
        header('Location: http://localhost:8080/mkmphpapp/Home.html');
    } else {
        $error = "Username or Password is invalid";
    }
}