<?php

include_once('database.php');

class Time extends Database {

    function __construct($id) {
        $sql = "SELECT * FROM Time WHERE Id = $id;";
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

    public static function add($DATE, $event) {
        $sql = "INSERT INTO timetable (Date,event) VALUES (?,?)";
        Database::$db->prepare($sql)->execute([$DATE,  $event]);
    }

    public function delete() {
        $sql = "DELETE FROM timetable WHERE Id = $this->id;";
        Database::$db->query($sql);
    }
//need edit
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
        $sql = "UPDATE timetable SET Date = ?,event = ?\ WHERE id = ?;";
        Database::$db->prepare($sql)->execute([$this->Date, $this->event, $this->id]);
    }

}

?>
