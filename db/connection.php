<?php

class DB{
    public static function GetConnection(){
        try {
            $mysqli = new mysqli("localhost", "root", "123456", "Shool");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            return $mysqli;
        } catch (Exception $err) {
            throw $err->getMessage();
        }
    }

}

?>