<?php
require_once "./db/connection.php";

class PeopleModel{
    public static function FindAll(){
        $db = DB::GetConnection();
        $people = $db->query("select * from people");
        return $people;
    }

    public static function Create($dni,$name,$last_name ){
        $query="insert into people values ({$dni}, {$name}, {$last_name})";
        if(!DB::GetConnection()->query($query)){
           return "no se pudo registrar"; 
        }
        return "se registro correctamente";
    }
} 


?>