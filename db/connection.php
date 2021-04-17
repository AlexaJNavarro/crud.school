<?php

class DB{
    public static function GetConnection(){
        try {
            $host = "bsu4jae3rs9qarlpe80b-mysql.services.clever-cloud.com";
            $database = "bsu4jae3rs9qarlpe80b";
            $user = "ufu54yj6uw26caev";
            $password = "HWZyqtPRUHpGv1G1C9Be";
            $port = 3306;

            $mysqli = new mysqli($host,$user,$password,$database,$port);
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