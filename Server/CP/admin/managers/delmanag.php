<?php
include "../../funcs/connect.php";
if(isset($_GET["id"]))
{
    $sql="DELETE FROM `admin` WHERE manid = 0 AND `id` = :id";

    $result=$connect->prepare($sql);
    $result->bindValue(':id', $_GET["id"], PDO::PARAM_INT);
    $query=$result->execute();
    if($query){
        header("location:manag.php?deleted=8080");
        exit;

    }else{
        header("location:manag.php?notdeleted=1919");
        exit;
    }
}else{
    header("location:manag.php?notdeleted=1919");
    exit;
}
?>
