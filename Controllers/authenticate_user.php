<?php

include_once("../Controllers/common.php");
include_once("../Models/user.php");
Database::DBConnect();
$user_name = safeGet("user_name", "");
$password = safeGet("password", "");
  
$ID = User::login($user_name, $password);

echo $ID;

if ($ID == null) {
    header('Location: ../index.php?status=wrong');
} else {
    $user = User::user($ID);

    if ($user->profession == "School Student" || $user->profession == "Collage Student") {
     
        
        header("Location: ../view/student/home.php?id=$ID");
    } else {
        header("Location: ../view/teacher/home.php?id=$ID");
    }
}


?>
 