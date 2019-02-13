<?php

include_once('database.php');

class Courses extends Database {

    function __construct($id) {
        $sql = "SELECT * FROM courses WHERE id = $id;";
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
// type 0 = private
// type 1 = public
    public static function add($name, $study_year, $max_degree, $description, $type, $teacher_id) {
        $sql = "INSERT INTO courses (name,study_year,max_degree,description, type,teacher_id) VALUES (?,?,?,?,?,?);";
        Database::$db->prepare($sql)->execute([$name, $study_year, $max_degree, $description, $type, $teacher_id]);
    }

    public function delete() {
        $sql = "DELETE FROM courses WHERE id = $this->id;";
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
        $sql = "SELECT * FROM courses WHERE name like ('%$keyword%') ORDER BY $cloumn $order;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $courses = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $courses[] = new Courses($row['id']);
        }
        return $courses;
    }

    public function save() {
        $sql = "UPDATE courses SET name = ?,study_year = ?,max_degree=?, description= ? ,type=? ,teacher_id=? WHERE id = ?;";
        Database::$db->prepare($sql)->execute([$this->name, $this->study_year, $this->max_degree, $this->description, $this->type, $this->teacher_id, $this->id]);
    }

// function return teacher courses depending on the teacher id  all in 1 array of courses
    public static function show_my_courses($teacher_id) {
        $sql = "SELECT * FROM courses WHERE teacher_id= $teacher_id ;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $courses = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $courses[] = new Courses($row['id']);
        }
        return $courses;
    }

// function return student courses depending on the student  grade all in 1 array of courses



    public static function courseMaterial($crsid) {
        $sql = "SELECT * FROM `materialxcourse` WHERE course_id = $crsid ;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $materials = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $coursMaterialInfo = [];
            foreach ($row as $key => $value) {
                $coursMaterialInfo[$key] = $value;
            }
            $materials[] = $coursMaterialInfo;
        }
        return $materials;
    }

    public static function addCourseMaterial($crsid, $materialLabel, $MaterialURL) {
        $sql = "INSERT INTO `materialxcourse`(`course_id`, `material_label`, `material_url`) VALUES ($crsid,'$materialLabel','$MaterialURL');";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
    }

    public static function showCourseMaterial($id) {
        $sql = "SELECT * FROM `materialxcourse` WHERE id = $id ;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $key => $value) {
            $coursMaterialInfo[$key] = $value;
        }
        return $coursMaterialInfo;
    }

    public static function updateCourseMaterial($id, $materialLabel, $MaterialURL) {
        $sql = "UPDATE `materialxcourse` SET `material_label`='$materialLabel',`material_url`='$MaterialURL' WHERE id = $id";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
    }

    public static function deleteCourseMaterial($id) {
        $sql = "DELETE FROM `materialxcourse` WHERE id = $id";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
    }

}

?>
