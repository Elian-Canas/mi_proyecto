<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- <h1 class="text-center p-3">BIENVENIDO</h1> -->

    <section class="vh-100 gradient-custom">
        <form method="post" action="LoginControlador">

            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">BIENVENIDO</h2>
                                    <p class="text-white-50 mb-5">¡Por favor, introduce tu usuario y contraseña!</p>
                                    <?php
                                    include ("../app/models/Usuarios.php");
                                    include ("../app/Controladores/LoginControlador.php");
                                    ?>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="usuario" class="form-control form-control-lg" name="usuario" />
                                        <label class="form-label" for="typeEmailX">Usuario</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                        <label class="form-label" for="typePasswordX">Contraseña</label>
                                    </div>

                                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">¿Has olvidado tu contraseña?</a></p> -->



                                    <input name="btningresar" class="btn btn-outline-light btn-lg px-5" type="submit" value="INICIAR SESION">


                                </div>

                                <div>
                                    <!-- <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a> -->
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>