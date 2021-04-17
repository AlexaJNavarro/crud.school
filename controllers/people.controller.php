<?php
require_once "./models/people.model.php";

class PeopleController {
    public static function FindAll() {
        return PeopleModel::FindAll();
    }

    public static function Create( $dni, $name, $last_name ) {
        if (strlen($dni) != 8) {
            return "ingrese un dni valido";
        }
        if (strlen($name) < 0 || strlen($last_name) < 0) {
            return "ingrese data valida";
        }
        return PeopleModel::Create( $dni, $name, $last_name );
    }

    public static function Update( $dni, $name, $last_name ) {
        if (strlen($dni) != 8) {
            return "ingrese un dni valido";
        }
        if (strlen($name) < 0 || strlen($last_name) < 0) {
            return "ingrese data valida";
        }
        return PeopleModel::Update( $dni, $name, $last_name );
    }

    public static function Delete( $dni ) {
        if (strlen($dni) != 8) {
            return "ingrese un dni valido";
        }
        return PeopleModel::Delete( $dni );
    }
}