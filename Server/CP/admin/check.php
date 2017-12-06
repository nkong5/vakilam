<?php
include "../funcs/connect.php";
include "../funcs/funcs.php";

if (isset($_POST["btn"]) && tokenIsValid($_POST['csrf_token'], 'login')) {
    if (($_POST["username"] == "") || ($_POST["password"] == "")) {
        header("location:login.php?empty=1919");
        exit;
    } else {
        $sql = "SELECT password FROM admin WHERE username = ?";

        $prepare = $connect->prepare($sql);

        $prepare->bindValue(1, $_POST["username"], PDO::PARAM_STR);
        $prepare->execute();

        $result = $prepare->fetchColumn();

        if (password_verify($_POST["password"], $result)) {
            header("location:panel.php?loginok=2020");
            exit;
        } else {
            header("location:login.php?error=2121");
            exit;
        }
    }
} else {
    header("location:login.php");
}
