<?php

include_once('database.php');

class User extends Database {

    function __construct($id) {
        $sql = "SELECT * FROM `users` WHERE ID = $id;";
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

    public static function user($id) {
        $user = new User($id);
        return $user;
    }

    public static function adduser($Full_Name, $Email, $Mobile_No, $Profession, $Department, $School_Collage, $Country, $User_Name, $Password) {
        $sql = "INSERT INTO `users`(`User_Name`,`Name`, `email`, `mobile`, `profession`, `department`, `school_collage`, `country`) VALUES ('$User_Name','$Full_Name', '$Email', '$Mobile_No', '$Profession', '$Department', '$School_Collage', '$Country');";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $sql = "SELECT `ID` FROM `users` WHERE User_Name = '$User_Name';";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        $User_ID = $data['ID'];
        $sql = "INSERT INTO `authentication`(`User_Name`, `Password`, `User_ID`) VALUES ('$User_Name','$Password',$User_ID)";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
    }

    public static function searchbyUserName($name) {
        $sql = "SELECT `User_ID` FROM `authentication` WHERE (User_Name = '$name');";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);


        if (empty($data)) {
            return null;
        }
        return $data['User_ID'];
    }

    public static function RestorePassword($id, $password) {
        $sql = "UPDATE `authentication` SET `Password`='$password' WHERE User_ID = $id;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
    }

    public static function login($user_name, $password) {
        $sql = "SELECT `User_ID` FROM `authentication` WHERE (User_Name = '$user_name' AND Password = '$password');";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);


        if (empty($data)) {
            return null;
        }
        return $data['User_ID'];
    }

}
