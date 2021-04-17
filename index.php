<?php
require_once "./models/people.model.php";

echo PeopleModel::Create("72964581","Geral","Navarro");

echo "<br>";

$people = PeopleModel::FindAll();
foreach($people as $clave => $valor) {
    foreach($valor as $v){
        print "$v\n";
    }
    echo "<br>";
}
echo "<br>";



?>