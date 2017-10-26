<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");



$result = $connect->query("SELECT username, usComment, adComment FROM userdata WHERE catstatus='20' Order By id Desc ");
$outp = "";
$collection = array(
    "select" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['select'][] = array(
        "username" => $rs["username"],
        "usComment" => $rs["usComment"],
        "adComment" => $rs["adComment"]
    );
}

echo json_encode($collection);
