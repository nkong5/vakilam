<?php
include "../funcs/connect.php";
?>
<?php

if(isset($_POST["btn"]))
{
    if (($_POST["username"] == "") || ($_POST["password"] == "")) {
     header("location:login.php?empty=1919");
        exit;
    }
    else{
        $x=NULL;
        $sql=  "select count(*) FROM admin   where   username=? and password=? ";
        $result=$connect->prepare($sql);
        $result->bindValue(1, $_POST["username"], PDO::PARAM_STR);
        $result->bindValue(2, $_POST["password"], PDO::PARAM_STR);
        $result->execute();
        $query=$result->fetchColumn();
        if($query==1)
        {
            header("location:panel.php?loginok=2020");
            exit;
        }
        else
        {
            header("location:login.php?error=2121");
            exit;
        }
    }
}
else
{
    header("location:login.php");
}
