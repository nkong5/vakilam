<?php
include "../funcs/connect.php";

$sql    =  "select * FROM `admin`";
$result = $connect->query($sql);

foreach ($result as $rows) {
    // Get current password
    $id           = $rows['id'];
    $textPassword = $rows['password'];

    // If password length is exactly 60 it most probably means it has already been encrypted in bcrypt
    // and shouldn't be encrypted again. A bcrypt hash has exactly 60 characters
    if (strlen($textPassword) === 60) {
        continue;
    }

    // encrypt current password
    $bcryptPassword = password_hash($textPassword, PASSWORD_BCRYPT);

    // Update password to encrypted version
    $update = "UPDATE `admin` SET `password` = :password WHERE `id` = :id";

    $result = $connect->prepare($update);

    $result->bindValue(':password', $bcryptPassword, PDO::PARAM_STR);
    $result->bindValue(':id', $id, PDO::PARAM_INT);

    $query = $result->execute();
}

?>
