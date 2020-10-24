<?php
/**
 * Created by IntelliJ IDEA.
 * User: galihparyanto
 * Date: 24/10/20
 * Time: 10.20
 */

include('config.php');
session_start();

if(!isset($_SESSION['login_user'])){
    header('Location: http://localhost:8080/mkmphpapp/Login.html');
    die();
}

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select username from user where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];
print "Hello ".$login_session."!";