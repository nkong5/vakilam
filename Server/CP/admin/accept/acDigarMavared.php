<?php
include "../../funcs/connect.php";
if(isset($_GET["id"]))
{
    $sql="UPDATE `userdata` SET `catstatus` = '24' WHERE `userdata`.`id` = ?";
    $result=$connect->prepare($sql);
    $result->bindValue(1, $_GET["id"], PDO::PARAM_INT);
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