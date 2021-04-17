<?php

class DB{
    public static function GetConnection(){
        try {
            $host = "localhost";
            $database = "DBScholl";
            $user = "leo";
            $password = "chester";
            $port = 3306;

            $mysqli = new mysqli($host,$user,$password,$database,$port);
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            return $mysqli;
        } catch (Exception $err) {
            throw $err;
        }
    }

}

?>