<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT * FROM `shekayatname` WHERE dataid2='13'");
$outp = "";
$collection = array(
    "records" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['records'][] = array(
        "datamind2" => $rs["datamind2"],
        "datatitr" => $rs["datatitr"]
    );
}
echo json_encode($collection);