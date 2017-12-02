<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";

if(isset($_POST["btn"]))
{
    $username=xss($_POST["username"]);
    $email=xss($_POST["email"]);
    $password=xss($_POST["password"]);
    if(empty($_POST["username"]) ||empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["password2"]))
    {
        header ("location:regi.php?empty=6060");
        exit;
    }
    if($_POST["password"]!=$_POST["password2"]){
        header ("location:regi.php?error=6161");
        exit;
    }
    else
    {
        $sql="INSERT INTO `admin` (`id`, `manid`, `username`, `email`, `password`) VALUES (NULL, '0', ?, ?, ?);";
        $result=$connect->prepare($sql);
        $result->bindValue(1, $username, PDO::PARAM_STR);
        $result->bindValue(2, $email, PDO::PARAM_STR);
        $result->bindValue(3,$password, PDO::PARAM_STR);
        $query=$result->execute();
        if($query)
        {
            header ("location:manag.php?full=2020");
            exit;
        }
        else
        {
            header ("location:regi.php?oopsno=8080");
            exit;
        }


    }


}


?>