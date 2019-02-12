<?php

include_once("./common.php");
include_once("../Models/user.php");
Database::DBConnect();

$Email = safeGet("Email");
$User_Name = safeGet("User_Name");
$Password = safeGet("Password");
$Re_enter_password = safeGet("Re_enter_password");

$id = User::searchbyUserName($User_Name);

if ($id == null) {
    header("Location: ../View/RestorePassword.php?User_Name=$User_Name&Email=$Email&User_Name_Wrong=1");
} else {
    $user = User::user($id);
    if ($Email != $user->email) {
        header("Location: ../View/RestorePassword.php?User_Name=$User_Name&Email=$Email&email_Wrong=1");
    } else {
        if ($Password != $Re_enter_password) {
            header("Location: ../View/RestorePassword.php?User_Name=$User_Name&Email=$Email&password_Wrong=1");
        } else {
            User::RestorePassword($id, $Password);
            header("Location: ../index.php");
        }
    }
}
?>