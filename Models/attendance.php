<?php

include_once('database.php');

class Attendance extends Database {

    function __construct($id) {
        $sql = "SELECT attendance.*,users.Name as student_name, (attendance.Week1+attendance.Week2+attendance.Week3+attendance.Week4+attendance.Week5+attendance.Week6+attendance.Week7+attendance.Week8+attendance.Week9+attendance.Week10+attendance.Week11+attendance.Week12) as attendance_point FROM attendance join users on users.ID = attendance.std_id WHERE attendance.id = $id";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if (empty($data)) {
            return;
        }
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public static function all_course($id) {
        $sql = "SELECT `id` FROM `attendance` WHERE crs_id = $id;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $attendences = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $attendences[] = new Attendance($row['id']);
        }
        return $attendences;
    }

    public static function save($id,$week1,$week2,$week3,$week4,$week5,$week6,$week7,$week8,$week9,$week10,$week11,$week12) {
        $sql = "UPDATE `attendance` SET `Week1`=$week1,`Week2`=$week2,`Week3`=$week3,`Week4`=$week4,`Week5`=$week5,`Week6`=$week6,`Week7`=$week7,`Week8`=$week8,`Week9`=$week9,`Week10`=$week10,`Week11`=$week11,`Week12`=$week12 WHERE id = $id;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
    }

}

?>
