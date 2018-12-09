<?php

include_once("../Controllers/common.php");
include_once("../Models/student.php");
Database::DBConnect();
$id = safeGet("id", 0);
if ($id == 0) {
    Student::add(safeGet("name"));
} else {
    $student = new Student($id);
    $student->name = safeGet("name");
    $student->save();
}
header('Location: ..//view/student/students.php');
?>