<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de transacciones</title>
</head>

<body class="p-3 mb-2 bg-secondary text-body-emphasis">

    <div class="container text-center">
        <h1>Listado de personas:</h1>

        <div class="list-group py-3">
            <a href="/dashboard/create_user">
                <button type="submit" class="list-group-item list-group-item-action active " aria-current="true">
                    Crear Nuevo Usuario
                </button>
            </a>
            <ul>
                <?php foreach ($nombres as $nombre) : ?>
                    <a href="/dashboard/<?= $nombre["id"]; ?>">


                        <button type="submit" class="list-group-item list-group-item-action --bs-primary-border-subtle "><?= $nombre["nombre"]; ?></button>
                    </a>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>