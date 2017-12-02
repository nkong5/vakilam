<?php
if(!isset($_SESSION))
{
    session_start();
}
header("X-Content-Type-Options: nosniff");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: DENY");

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

$host="vakila2.sql.ghserv.net";
$db="vakilam_org_test";
$username="vakilam1";
$password="WibwaquoTwulyeudPheHeftiaroyp9";
try {
    $connect = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $connect->query("set character set utf8");
}
catch(PDOException $error)
{
    
}


?>
