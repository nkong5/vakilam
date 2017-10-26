<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT datamind FROM admindata WHERE dataid='13'");
$outp = "";
$collection = array(
    "records" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['records'][] = array(
        "datamind" => $rs["datamind"]
    );
}
echo json_encode($collection);