<?php

include_once("../Controllers/common.php");
include_once("../Models/student.php");
Database::DBConnect();
$id = safeGet("id", 0);
$id_user = safeGet("id_user", 0);
if ($id == 0) {
    Student::add(safeGet("name"));
} else {
    $student = new Student($id);
    $student->name = safeGet("name");
    $student->save();
}
echo $student->name;
//header("Location: ../view/teacher/students.php?id=$id_user&&id_st=$id");
?>