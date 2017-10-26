<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT * FROM `shekayatpic` WHERE picid='15'");
$outp = "";
$collection = array(
    "records" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['records'][] = array(
        "piclink" => $rs["piclink"]
    );
}
echo json_encode($collection);