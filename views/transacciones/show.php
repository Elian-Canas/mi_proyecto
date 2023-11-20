<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pantalla de transacciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
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
                                <li><a class="dropdown-item" href="/transacciones/create_transaction">Crear Nueva Transaccion</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand"><?= $categorias['nombre'] ?></a>

            </div>
        </nav>


        <h2 class="py-3 text-dark-emphasis container text-center">Lista de transacciones</h2>

        <table class="table container text-center">
            <thead>
                <tr>
                    <th scope="col">FECHA</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <?php foreach ($transacciones as $transaccion) : ?>

                <tbody>
                    <tr>
                        <th scope="row"><?= $transaccion["fecha"] ?></th>
                        <td><?= $transaccion["descripcion"] ?></td>
                        <td><?= $transaccion["monto"] ?></td>
                        <td><?= $transaccion["tipo"] ?></td>
                        <td>
                            <a href="/transacciones/<?= $transaccion['id'] ?>/edit">
                                <button type="submit" name="edit" class="btn btn-outline-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="/transacciones/<?= $transaccion['id'] ?>/delete" method="post">
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>

        </table>




        <div class="col align-self-end">

        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>