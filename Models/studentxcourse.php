<?php
include_once('database.php');

class Studentxcourse extends Database {

    function __construct($id) {
        $sql = "SELECT * FROM studentxcourse WHERE crs_id = $id;";
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
    public static function add($crs_id, $std_id, $grade ,$examine_date) {
        $sql = "INSERT INTO studentxcourse (crs_id, std_id, grade ,examine_date) VALUES (?,?,?,?);";
        Database::$db->prepare($sql)->execute([$crs_id, $std_id, $grade ,$examine_date]);
    }

    public function delete() {
        $sql = "DELETE FROM studentxcourse WHERE id = $this->id;";
        Database::$db->query($sql);
    }

    public static function all($keyword, $cloumn, $order) {
        if ($cloumn == null) {
            $cloumn = "id";
        }
        if ($order == null) {
            $order = "ASC";
        }
        $keyword = str_replace(" ", "%", $keyword);
        $sql = "SELECT * FROM studentxcourse WHERE name like ('%$keyword%') ORDER BY $cloumn $order;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $courses = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $courses[] = new Courses($row['id']);
        }
        return $courses;
    }

    public function save() {
        $sql = "UPDATE studentxcourse SET crs_id=?,examine_date=?, grade = ?,std_id=? WHERE id = ?;";
            Database::$db->prepare($sql)->execute([$this->crs_id, $this->emaxine_date, $this->grade,$this->std_id, $this->id]);
    }

    // function return teacher courses depending on the teacher id  all in 1 array of courses
    public static function std_show_my_courses($student_id) {
        $sql = "SELECT  courses.*  FROM studentxcourse JOIN courses on studentxcourse.crs_id=courses.id JOIN  users WHERE users.ID= $student_id ;";
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
    
 
    
    
}

?>
