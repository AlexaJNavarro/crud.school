<?php
require_once './controllers/people.controller.php';
$result = PeopleController::Create($_POST['dni'], $_POST['name'], $_POST['last_name']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<h1> <?= $result ?> </h1>
<button class="btn btn-primary" id="regresar">
    Regresar
</button>

<script>
    const $regresar = document.getElementById('regresar')
    $regresar.addEventListener('click', () => {
        location.href = "/index.php"
    })
</script>
</body>
</html>