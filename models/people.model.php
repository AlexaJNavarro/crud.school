<?php
require_once "./db/connection.php";

class PeopleModel{
    public static function FindAll(){
        $people = DB::GetConnection()->query('SELECT * FROM people');
        if ( !$people ) {
            return "no se logra obtener los datos";
        }
        return $people;
    }

    public static function Create( $dni, $name, $last_name ){
        $query="insert into people (dni, name, last_name) values ('{$dni}', '{$name}', '{$last_name}')";
        if(!DB::GetConnection()->query($query)){
           return "no se pudo registrar"; 
        }
        return "se registro correctamente";
    }

    public static function Update($dni,$name,$last_name ){
        $query="update people set name = '{$name}', last_name = '{$last_name}' where dni = '{$dni}'";
        if(!DB::GetConnection()->query($query)){
            return "no se pudo actualizar";
        }
        return "se actualizo correctamente ";
    }

    public static function Delete($dni){
        $query="DELETE FROM people WHERE dni = '{$dni}'";
        if(!DB::GetConnection()->query($query)){
            return "no se logro eliminar";
        }
        return "se elimino correctamente";
    }
} 


?>