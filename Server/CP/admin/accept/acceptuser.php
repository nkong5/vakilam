<?php
# ini_set('display_errors', 1);
# ini_set('display_startup_errors', 1);
# error_reporting(E_ALL);
include "../../funcs/connect.php";
if(isset($_GET["id"]))
{
    $sql="UPDATE `userdata` SET `status` = '1' WHERE `id` = :id";
    $result=$connect->prepare($sql);
    $result->bindValue('id', $_GET["id"], PDO::PARAM_INT);
    $query=$result->execute();
    if($query){
        header("location:../cat/userask.php?acceptOK=8080");
        exit;
    }else{
        header("location:../cat/userask.php?error=1919");
        exit;
    }
}else{
        header("location:../cat/userask.php");
        exit;
}
?>
