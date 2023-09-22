<?php
session_start();

require_once("db_connect.php");
$login = $_POST['login'];
$passward = $_POST['password'];
$md5_password = md5($passward);
$query = mysqli_query($db, "SELECT * FROM 'users' WHERE 'login'='{$login}'");
if(mysqli_num_rows($query) == 0){
    $_SESSION['user'] = ['nick' => $login];
    mysqli_query($db,"INSERT INTO 'users'('login','password') VALUES('{$login}','{$md5_password}')");
    header("Location: /user.php");
} else {
    echo"Ошибка: данный логин уже занят";
}

?>