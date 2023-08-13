<?php

class DB {
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "class_ranks";

    public static $connection;

    public static function connect()
    {
        self::$connection = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);

        if(self::$connection->connect_error) {
            die("Koneksi Bermasalah" . self::$connection->connect_error);
        }
        return self::$connection;
    }
}

?>