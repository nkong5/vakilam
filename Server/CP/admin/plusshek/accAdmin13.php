<?php
include "../../funcs/connect.php";
include "../../funcs/funcs.php";
if(isset($_POST["btn"]))
{
    $datamind2=xss($_POST["datamind2"]);
    $datatitr=xss($_POST["datatitr"]);
    if(empty($_POST["datamind2"]) ||empty($_POST["datatitr"]))
    {
        header ("location:../sheknamepage/shekayatName13.php?empty=6060");
        exit;
    }
    else
    {
        $sql="INSERT INTO `shekayatname` (`id`, `dataid2`, `datamind2`, `datatitr`, `dataname2`) VALUES (NULL, '13', ?, ?, 'شکایت به سازمان بازرسی کل کشور');";
        $result=$connect->prepare($sql);
           $result->bindValue(1, $datamind2, PDO::PARAM_STR);
           $result->bindValue(2, $datatitr, PDO::PARAM_STR);
        $query=$result->execute();
        if($query)
        {
            header ("location:../sheknamepage/shekayatName13.php?full=2020");
            exit;
        }
        else
        {
            header ("location:../sheknamepage/shekayatName13.php?oopsno=8080");
            exit;
        }


         }


}


?>