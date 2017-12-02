<?php
include("connect.php");
include("funcs.php");

header("Content-Type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));
$username = xss($data->username);
$usComment = xss($data->usComment);

if ( $username == "" || $usComment == "")
{

}
else
{
    $sql = "INSERT INTO `userdata` (`id`, `status`, `catstatus`, `username`, `usComment`, `adComment`, `create_time`) VALUES (NULL, '', '', ?, ?, '', CURRENT_TIMESTAMP);";
    $result = $connect->prepare($sql);
    $result->bindValue(1, $username, PDO::PARAM_STR);
    $result->bindValue(2, $usComment, PDO::PARAM_STR);
    $query = $result->execute();
    echo json_encode($data);
};
?>
