<?php

include_once('database.php');

class Studentxcourse extends Database {

    function __construct($id,$id2) {
        $sql = "SELECT * FROM studentxcourse WHERE studentxcourse.crs_id = $id and studentxcourse.std_id=$id2 ";
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

    //INSERT INTO courses (name,study_year,max_degree,description, type,teacher_id) VALUES ("phy",2,200,"phy for beginers",1,4);
    // ty[e 0 = private
    public static function add($crs_id, $std_id, $grade, $examine_date) {
        // check exist or no
        $sql = "SELECT * FROM studentxcourse WHERE crs_id =$crs_id  AND std_id=$std_id;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if (!empty($data)) {

            return;
        }
        // check proffsion
        $sql2 = "SELECT users.profession FROM  users WHERE users.ID=$std_id;";
        $statement2 = Database::$db->prepare($sql2);
        $statement2->execute();
        $data2 = $statement2->fetch(PDO::FETCH_ASSOC);
        $coursMaterialInfo = [];
        foreach ($data2 as $key => $value) {
            $coursMaterialInfo[$key] = $value;
        }
        if ($coursMaterialInfo['profession'] == "School Teacher" || $coursMaterialInfo['profession'] == "Teacher Assistant" || $coursMaterialInfo['profession'] == "DR" || $coursMaterialInfo['profession'] == 'Professor') {
            return;
        }


        //
        //  SELECT * FROM studentxcourse WHERE crs_id =$crs_id  AND std_id=$std_id
        $sql3 = "INSERT INTO studentxcourse (crs_id, std_id, grade ,examine_date) VALUES (?,?,?,?);";
        Database::$db->prepare($sql3)->execute([$crs_id, $std_id, $grade, $examine_date]);
    }

    public function delete() {
        $sql = "DELETE FROM studentxcourse WHERE id = $this->id;";
        Database::$db->query($sql);
    }

    public static function all($id) {
        $sql = "SELECT studentxcourse.*,users.Name FROM studentxcourse join users ON studentxcourse.std_id= users.ID WHERE studentxcourse.crs_id = $id";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $grades = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $grade = [];
            foreach ($row as $key => $value) {
                $grade[$key] = $value;
            }
            $grades[] = $grade;
        }
        return $grades;
    }

    public function save() {
        $sql = "UPDATE studentxcourse SET crs_id=?,examine_date=?, grade = ?,std_id=? WHERE id = ?;";
        Database::$db->prepare($sql)->execute([$this->crs_id, $this->examine_date, $this->grade, $this->std_id, $this->id]);
    }

    // function return courses for the student
    public static function std_show_my_courses($student_id) {
        $sql = "SELECT  courses.*  FROM studentxcourse JOIN courses on studentxcourse.crs_id=courses.id AND studentxcourse.std_id=  $student_id ;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $courses = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $courses[] = new Courses($row['id']);
        }
        return $courses;
    }

    //==============show teacher students==============//
    public static function teacher_show_my_students($course_id) {
        $sql = "SELECT  users.*  FROM users JOIN studentxcourse ON users.ID = studentxcourse.std_id JOIN courses WHERE courses.id= studentxcourse.crs_id AND courses.id=$course_id;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $user = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $user[] = new User($row['ID']);
        }
        return $user;
    }

    //get specific degree
    public static function get_degree($student_id) {
        $sql = "SELECT  courses.*  FROM studentxcourse JOIN courses on studentxcourse.crs_id=courses.id AND studentxcourse.std_id=  $student_id ;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $courses = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $courses[] = new Courses($row['id']);
        }
        return $courses;
    }

}

?>
