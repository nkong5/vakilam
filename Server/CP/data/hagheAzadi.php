<?php
include("../funcs/connect.php");

header("Content-Type: application/json; charset=UTF-8");


$result = $connect->query("SELECT datamind FROM admindata WHERE dataid='10'");
$outp = "";
$collection = array(
    "records" => array()
);
while($rs = $result->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $collection['records'][] = array(
        "datamind" => $rs["datamind"]
    );
//    $outp .= '{"username":"' . $rs["username"] . '",';
//    $outp .= '"usComment":"' . $rs["usComment"] . '",';
//    $outp .= '"adComment":"'. $rs["adComment"] . '"}';
}
//$outp ='{"records":['.xss($outp.']}';
//echo($outp);
echo json_encode($collection);
