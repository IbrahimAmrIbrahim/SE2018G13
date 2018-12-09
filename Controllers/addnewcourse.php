<?php

include_once("../Controllers/common.php");
include_once("../Models/grade.php");
Database::DBConnect();

$id = safeGet("student_id");
$NumOfCheck = safeGet("number_box");
$i = 0; //for the for loop
$num = 0; //zero

for ($i; $i < $NumOfCheck; $i = $i + 1) {
    $num = $num + 1;
    $check_box = "checkbox" . $num;
    $checkdata = safeGet($check_box);
    if ($checkdata != null) {
        Grade::add($checkdata, $id);
    }
}
header('Location: ../view/student/students.php');
?>