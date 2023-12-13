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

        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Lista de Categorias</a>
                    <!-- <h2 class="py-3 text-dark-emphasis container text-center">Lista de categorias</h2> -->
                    <!-- <a class="navbar-brand" href="/transacciones/create_category">Crear</a> -->
                </div>
            </nav>
        </div>

        <div class="container text-center">
            <table class="table table-striped container text-center">
                <thead>
                    <tr>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">EDITAR</th>
                        <th scope="col">ELIMINAR</th>
                    </tr>
                </thead>
                <?php foreach ($categorias as $categoria) : ?>

                    <tbody>
                        <tr>
                            <td scope="row"><?= $categoria["nombre"] ?></td>



                            <td>
                                <a href="/categorias/<?=$categoria['id']?>/edit">
                                    <button type="submit" name="edit" class="btn btn-outline-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="/categorias/<?=$categoria['id']?>/delete" method="post">
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>

            </table>




            <div class="container-sm position-center">
                <a href="/transacciones/<?=$id ?>">
                    <button type="button" class="btn btn-secondary btn-lg" aria-label="Close">Volver</button></a>
                </a>
                <a href="/transacciones/create_category">
                    <button type="submit" class="btn btn-success btn-lg">Añadir</button>

                </a>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>