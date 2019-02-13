<?php

header('Content-Type: application/json; charset=utf-8');
include_once("../Models/Courses.php");
Database::DBConnect();

Courses::deleteCourseMaterial($_GET['id']);

echo json_encode(['status' => 1]);
?>
