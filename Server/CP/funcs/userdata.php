<?php
include("connect.php");

header("Content-Type: application/json; charset=UTF-8");

$result = $connect->query("SELECT username, usComment, adComment FROM userdata WHERE status='1' Order By id Desc ");
$outp = "";
$collection = array(
    "records" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['records'][] = array(
        "username" => $rs["username"],
        "usComment" => $rs["usComment"],
        "adComment" => $rs["adComment"]
    );

}
echo json_encode($collection);
