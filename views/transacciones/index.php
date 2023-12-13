<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pantalla de transacciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <div>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/dashboard/<?= $id ?>">Control de Finanzas</a>

                <button class="navbar-toggler col" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="navbar-brand" href="/categorias">Categorias</a>
                        </li>
                    </ul>
                </div>



                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown position relative end-50">

                            <button class="btn btn-dark dropdown-toggle " data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <a class="navbar-brand">
                                    <?php
                                    echo $resultado['nombres'] . " " . $resultado['apellidos'];
                                    ?>
                                </a>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                    </button class="dropdown-menu-end">
                </div>

            </div>
        </nav>


        <div class="container">
            <div class="row">
                <h2 class="py-3 text-dark-emphasis col-md-8 container text-center">Lista de transacciones</h2>
                <a href="/transacciones/<?= $resultado['id'] ?>/create" class="col md-4 py-3">
                    <button class="btn btn-outline-success">
                        Crear Transaccion
                    </button>
                </a>
            </div>
        </div>

        <table class="table table-striped table-responsive container text-center col-xs-1">
            <thead>
                <tr>
                    <th scope="col">FECHA</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <?php foreach ($transacciones as $transaccion): ?>

                <tbody>
                    <tr>
                        <th scope="row">
                            <?= $transaccion["fecha"] ?>
                        </th>
                        <th scope="row">
                            <?= $transaccion["categoria"] ?>
                        </th>
                        <td class="text-capitalize">
                            <?= $transaccion["descripcion"] ?>
                        </td>
                        <th>
                            <?= $transaccion["monto"] ?>
                        </th>
                        <td class="text-capitalize">
                            <?= $transaccion["tipo"] ?>
                        </td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>