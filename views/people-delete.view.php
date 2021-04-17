<?php
    require "./controllers/people.controller.php";
    $response = PeopleController::Delete($_GET['dni'])
?>