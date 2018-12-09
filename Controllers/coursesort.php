<?php

header('Content-Type: application/json; charset=utf-8');
include_once("../Models/Courses.php");
Database::DBConnect();
$course = Courses::all($_GET['keyword'], $_GET['column'], $_GET['order']);

echo json_encode($course);
?>
