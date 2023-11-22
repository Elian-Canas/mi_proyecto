<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Transaccion</title>
</head>

<body>



    <div class="h2 py-5 container text-primary-emphasis panel panel-default">
        <div class="panel-heading">
            <h1 class="h2 py-3 text-primary-emphasis container text-center">Editar Transacción</h1>

        </div>
        <form class="container text-center" action="/transacciones/<?= $transacciones['id'] ?>" method="post">

            <div class="row">
            <div class="input-group col mb-3">
                    <span class="input-group-text">Categoria</span>
                    <select aria-valuetext="<?= $categoria['nombre'] ?>" class="form-select" name="categoria_id">
                        <?php foreach ($categorias as $categoria) : ?>
                            <option value= "<?= $categoria['id'] ?>"><?= $categoria["nombre"] ?></option>
                        <?php endforeach ?>
                    </select>
                    <span class="input-group-text"></span>
                </div>

                <div class="mb-3 col mb-3">
                    <div class="input-group">
                        <span class="input-group-text">Monto</span>
                        <input value="<?= $transacciones['monto'] ?>" type="number" class="form-control" placeholder="$$$" name="monto">
                        <span class="input-group-text"></span>
                    </div>
                </div>
                <div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha</span>
                    <input value="<?= $transacciones['fecha'] ?>" type="date" class="form-control" placeholder="fecha" name="fecha">
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tipo</span>
                    <select value="<?= $transacciones['tipo'] ?>" class="form-select" aria-placeholder="Seleccione el tipo de dato" aria-label="Default select example" name="tipo">
                        <option value="ingreso">ingreso</option>
                        <option value="gasto">gasto</option>
                    </select>
                    <span class="input-group-text"></span>
                </div>
            </div>
            <div class="mb-3 ">
                <div class="input-group mb-3">
                    <span class="input-group-text">Descripcion</span>
                    <input value="<?= $transacciones['descripcion'] ?>" type="text" class="form-control" placeholder="Descripcion..." name="descripcion">
                    <span class="input-group-text"></span>
                </div>
            </div>
    </div>
    <div class="container text-center">
        <a href="/transacciones">
            <button type="button" class="btn btn-danger btn-lg" aria-label="Close">Volver</button></a>
        <button type="submit" class="btn btn-secondary btn-lg">Actualizar datos</button>
        </form>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>