<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT * FROM `shekayat` WHERE dataid='14'");
$outp = "";
$collection = array(
    "records" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['records'][] = array(
        "datamindd" => $rs["datamindd"]
    );
}
echo json_encode($collection);