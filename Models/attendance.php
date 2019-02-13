<?php

include_once('database.php');

class Attendance extends Database {

    function __construct($id,$id2) {
        $sql = "SELECT * FROM attendance WHERE attendance.crs_id = $id and attendance.std_id=$id2 ";
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
    public static function add($crs_id, $std_id, $points) {
        
       
        $sql3 = "INSERT INTO attendance (crs_id, std_id, points ) VALUES (?,?,?);";
        Database::$db->prepare($sql3)->execute([$crs_id, $std_id, $points ]);
    }

    public function delete() {
        $sql = "DELETE FROM attendance WHERE id = $this->id;";
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
        $sql = "UPDATE attendance SET crs_id=?, points = ?,std_id=? WHERE id = ?;";
        Database::$db->prepare($sql)->execute([$this->crs_id, $this->points, $this->std_id, $this->id]);
    }

    // function return courses for the student
    

    //==============show teacher students==============//
  

    //get specific degree
    

}

?>
