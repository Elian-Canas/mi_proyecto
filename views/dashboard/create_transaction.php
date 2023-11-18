<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Contacto</title>
</head>

<body>
    <h1 class="h2 py-3 text-primary-emphasis">Crear Nueva Transacción</h1>


    <div class="h2 py-5 text-primary-emphasis">
        <form class="container text-center" action="/dashboard/<?= $categorias['id'] ?>" method="post">

            <div class="mb-3 ">
                <div class="input-group mb-3">
                    <span class="input-group-text">Usuario_id</span>
                    <input type="number" class="form-control" placeholder="" name="usuario_id">
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div class="mb-3 ">
                <div class="input-group mb-3">
                    <span class="input-group-text">Categoria_id</span>
                    <input type="number" class="form-control" placeholder="" name="categoria_id">
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div class="mb-3 ">
                <div class="input-group mb-3">
                    <span class="input-group-text">Monto</span>
                    <input type="number" class="form-control" placeholder="$$$" name="monto">
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha</span>
                    <input type="date" class="form-control" placeholder="fecha" name="fecha">
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tipo</span>
                    <select class="form-select" aria-label="Default select example" name="tipo">
                        <option selected>Seleccione el tipo de dato</option>
                        <option value="ingreso">ingreso</option>
                        <option value="gasto">gasto</option>
                    </select>
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div class="mb-3 ">
                <div class="input-group mb-3">
                    <span class="input-group-text">Descripcion</span>
                    <input type="text" class="form-control" placeholder="Descripcion..." name="descripcion">
                    <span class="input-group-text"></span>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Ingresar datos</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>