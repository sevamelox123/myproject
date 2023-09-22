<?php
session_start();
if(isset($_SESSION['user'])){
    echo ("Вы авторизовались как ".$_SESSION['user']['nick']);
} else{
    echo "вы не авторизованны.";
}




?>