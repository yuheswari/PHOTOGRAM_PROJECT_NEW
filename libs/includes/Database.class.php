<?php

class Database
{
    public static $conn = null;

    public static function getConnection()
    {
        if (Database::$conn == null) {

            $servername = "mysql.selfmade.ninja";
            $user = "yuhes";
            $pass = "abcdefg_12345";
            $dbname = "yuhes_photo";

            // Create connection
            $conn = new mysqli($servername, $user, $pass, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error); //todo:replace with exceptional handling 
            } else {
                printf(" New Connected successfully");
                Database::$conn =$conn;
                return Database::$conn;
            }

        } else {
            printf(" Reusing existing connection");
            return Database::$conn;
        }
    }
}
