<?php

class Database {

    protected static $db = null;

    private static function connect($host, $database, $uid, $pwd) {
        if (!empty(Database::$db)) {
            return;
        }
        $dsn = "mysql:host=$host;dbname=$database";

        try {
            Database::$db = new PDO($dsn, $uid, $pwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function get($field) {
        if (isset($this->{$field})) {
            return $this->{$field};
        }
        return null;
    }

    public static function DBConnect() {
       // Database::connect('localhost', 'lms', 'root', '');
        Database::connect('sql202.epizy.com', 'epiz_23087624_lms', 'epiz_23087624', 'ZWBQKm6hhDxPH');
    }

}

?>