<?php
require_once "./controllers/people.controller.php";
$people = PeopleModel::FindAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-2">
            CRUD People
        </h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">DNI</th>
                <th scope="col">Name</th>
                <th scope="col">LastName</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $people->fetch_assoc()) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td> <?= $row['dni'] ?> </td>
                    <td> <?= $row['name'] ?> </td>
                    <td> <?= $row['last_name'] ?> </td>
                    <td>
                        <a class="btn btn-danger" href="/views/people-delete.view.php?dni=<?= $row['dni'] ?>"> Eliminar </a>
                        <a class="btn btn-success" href=""> Actualizar </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>