<?php
require_once "./db/connection.php";

class PeopleModel{
    public function FindAll(){
        $db = DB::GetConnection();
    }
} 


?>