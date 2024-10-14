<?php
function checkLogin(){
    $logged = $_SESSION['logged'] ?? false;
    if($logged != true) header("Location: home.php?route=user/login");
}