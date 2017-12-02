<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
if(isset($_POST["btn"]))
{
    $username=xss($_POST["username"]);
    $usComment=xss($_POST["usComment"]);
    $adComment=xss($_POST["adComment"]);
    if(empty($_POST["username"]) ||empty($_POST["usComment"]) || empty($_POST["adComment"]))
    {
        header ("location:plusedit.php?empty=6060");
        exit;
    }
    else
    {
        $sql="INSERT INTO `userdata` (`id`, `status`, `catstatus`, `username`, `usComment`, `adComment`, `create_time`) VALUES (NULL, '0', '0', ?, ?, ?, CURRENT_TIMESTAMP);";
        $result=$connect->prepare($sql);
           $result->bindValue(1, $username, PDO::PARAM_STR);
           $result->bindValue(2, $usComment, PDO::PARAM_STR);
           $result->bindValue(3, $adComment, PDO::PARAM_STR);
        $query=$result->execute();
        if($query)
        {
            header ("location:plusedit.php?full=2020");
            exit;
        }
        else
        {
            header ("location:plusedit.php?oopsno=8080");
            exit;
        }


         }


}


?>