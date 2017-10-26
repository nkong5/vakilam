<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT datatitr, datamind2 FROM shekayatname WHERE dataid='10' Order By id Desc ");
$outp = "";
$collection = array(
    "select" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['select'][] = array(
        "datatitr" => $rs["datatitr"],
        "datamind2" => $rs["datamind2"]
    );
}
echo json_encode($collection);
