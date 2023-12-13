<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Categoria</title>
</head>

<body>



    <div class="h2 py-5 container text-primary-emphasis panel panel-default">
        <div class="panel-heading">
            <h1 class="h2 py-3 text-primary-emphasis container text-center">Editar Transacción</h1>

        </div>
        <form class="container text-center" action="/categorias/<?= $categorias['id'] ?>" method="post">


            <div class="mb-3 col mb-3">
                <div class="input-group">
                    <span class="input-group-text">Nombre</span>
                    <input value="<?= $categorias['nombre'] ?>" type="text" class="form-control" name="nombre">
                    <span class="input-group-text"></span>
                </div>
            </div>

    </div>
    <div class="container text-center">
        <a href="/categorias">
            <button type="button" class="btn btn-secondary btn-lg" aria-label="Close">Volver</button></a>
        <button type="submit" class="btn btn-success btn-lg">Actualizar datos</button>
        </form>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>