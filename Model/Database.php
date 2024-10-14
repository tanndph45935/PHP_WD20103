<?php
$host = 'localhost';
$db_name = 'wd20103';
$db_user = 'root';
$db_pass = '';

try{
   $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);
//    echo'ket noi thanh cong';
}catch(Exception $e){
   echo 'loi ket noi'. $e->getMessage();
}
    

