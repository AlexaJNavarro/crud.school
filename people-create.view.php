<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center">Create</h1>
    <form action="create.php" method="post">
        <input name="dni" class="form-control mt-2" type="text" maxlength="8">
        <input name="name" class="form-control mt-2" type="text" placeholder="Default input" aria-label="default input example">
        <input name="last_name" class="form-control mt-2" type="text" placeholder="Default input" aria-label="default input example">
        <button class="btn btn-primary mt-2">Enviar</button>
    </form>
</div>
</body>
</html>
