<?php

include_once("../Controllers/common.php");
include_once('../Models/attendance.php');

Database::DBConnect();
$id_user = safeGet("user_id", 0);
$crs_id = safeGet('crs_id', 0);
$std_id = safeGet('std_id', 0);
$j = safeGet('j', 0);

for ($i = 1; $i <= $j; $i++) {
    $std_id;
    $Week = [];
    for ($k = 1; $k <= 12; $k++) {
        $Checkbox = safeGet($i . "checkbox" . $k, 0);
        if ($Checkbox != 0) {
            $std_id = $Checkbox;
            $Week[$k] = 1;
        } else {
            $Week[$k] = 0;
        }
    }
    Attendance::save($std_id, $Week[1], $Week[2], $Week[3], $Week[4], $Week[5], $Week[6], $Week[7], $Week[8], $Week[9], $Week[10], $Week[11], $Week[12]);
}

header("Location: ../View/teacher/students_attendance.php?id=$id_user&crs_id=$crs_id");
?>