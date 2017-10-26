<?php
session_start();
$host="localhost";
$db="technofa_admin";
$username="root";
$password="";
try {
    $connect = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $connect->query("set character set utf8");
}
catch(PDOException $error)
{
}


else
{
    echo"<div class='divo'>اطلاعات وارد شده اشتباه است</div>";
}
?>