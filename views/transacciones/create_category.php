<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Categoria</title>
</head>

<body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <div class="h2 py-5 text-primary-emphasis container">
        <div class="panel-heading">
            <h1 class="h2 py-3 text-primary-emphasis container text-center">Crear Categoria</h1>
        </div>
        <form class="container text-center" id="create" action="/categorias" method="post">

            <div class="row">
                
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" placeholder="Escriba el nombre de la categoria" id="nombre" name="nombre" required>
                        <span class="input-group-text"></span>
                    </div>
                </div>

            </div>

            <a href="/categorias">
                <button type="button" class="btn btn-secondary btn-lg" aria-label="Close">Volver</button></a>
            </a>
            <button type="submit" class="btn btn-success btn-lg">Guardar</button>
        </form>
        <script>
            $("#btnAction").on('click', function() {
                $("input").each(function() { //inicia un bucle con todos los inputs
                    if ($(this).val() == '') { //Si el input esta "vacio"
                        alert("Debe llenar todos los campos");
                        // window.location.replace('create_transaction')
                        return false; //detiene el bucle
                    }
                });
            });
        </script>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
</body>

</html>