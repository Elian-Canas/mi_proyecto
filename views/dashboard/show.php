<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pantalla de transacciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="p-3 mb-2 bg-secondary text-body-emphasis">
    <div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Detalle de transacciones</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/dashboard/<?= $categorias["id"]; ?>/create_transaction">Crear Nueva Transaccion</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <p class="h2 py-3 text-primary-emphasis"><strong> Nombre: <?= $categorias['nombre'] ?></strong></p>

        <h2>Lista de transacciones</h2>

        <div class="container text-center">
            <div class="row gx">
                <div class="col align-self-start">
                    <p>TIPO</p>
                </div>
                <div class="col align-self-center">
                    <p>FECHA</p>
                </div>
                <div class="col align-self-end">
                    <p>MONTO</p>
                </div>
                <div class="col align-self-end">
                    <p>DESCRIPCION</p>
                </div>
                <div class="col align-self-end">
                    <p>EDITAR</p>
                </div>
                <div class="col align-self-end">
                    <p>ELIMINAR</p>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <?php foreach ($transacciones as $transaccion) : ?>
                <div class="row gx">
                    <div class="col align-self-start">
                        <li><?= $transaccion["tipo"] ?></li>
                    </div>
                    <div class="col align-self-center">
                        <li><?= $transaccion["fecha"] ?></li>
                    </div>
                    <div class="col align-self-end">
                        <li><?= $transaccion["monto"] ?></li>
                    </div>
                    <div class="col align-self-end">
                        <li><?= $transaccion["descripcion"] ?></li>
                    </div>
                    <div class="col align-self-end">
                        <a href="/dashboard/<?= $transaccion['id'] ?>/edit">
                            <button type="submit" name="edit" class="btn btn-outline-warning">
             
                            </button>
                        </a>

                    </div>
                    <div class="col align-self-end">
                        <form action="/dashboard/<?= $transaccion['id'] ?>/delete" method="post">
                            <button type="submit" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>