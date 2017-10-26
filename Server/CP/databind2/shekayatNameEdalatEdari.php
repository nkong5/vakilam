<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT dataname2, datatitr, datamind2 FROM shekayatname WHERE dataid='13' Order By id Desc ");
$outp = "";
$collection = array(
    "select" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['select'][] = array(
        "dataname2" => $rs["dataname2"],
        "datatitr" => $rs["datatitr"],
        "datamind2" => $rs["datamind2"]
    );
}
echo json_encode($collection);
