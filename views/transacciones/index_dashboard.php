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
                <a class="navbar-brand" href="/transacciones/<?=$id ?>">Control de Finanzas</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">

                        </li>
                    </ul>
                </div>
                <a class="navbar-brand"><?= $nombre . " " . $apellido?></a>

            </div>
        </nav>

        <div class="container text-center">
            <div class="row align-items-start g-col-6">
                <div class="">
                    <h4 class="py-3 text-dark-emphasis col-xl-8 container text-center">INGRESOS</h4>

                    <table class="table table-striped text-center ">
                        <thead>
                            <tr>
                                <th scope="col">FECHA</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">VALOR</th>
                                <th scope="col">TIPO</th>
                            </tr>
                        </thead>
                        <?php foreach ($ingresos as $ingreso): ?>

                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?= $ingreso["fecha"] ?>
                                    </th>
                                    <th scope="row">
                                        <?= $ingreso["categoria"] ?>
                                    </th>
                                    <td class="text-capitalize">
                                        <?= $ingreso["descripcion"] ?>
                                    </td>
                                    <th>
                                        <?= $ingreso["monto"] ?>
                                    </th>
                                    <td class="text-capitalize">
                                        <?= $ingreso["tipo"] ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                    </table>
                </div>
            </div>

            <div class="g-col-6">
                <h4 class="py-3 text-dark-emphasis col-xl-4 container text-center">GASTOS</h4>

                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">FECHA</th>
                            <th scope="col">CATEGORIA</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">VALOR</th>
                            <th scope="col">TIPO</th>
                        </tr>
                    </thead>
                    <?php foreach ($gastos as $gasto): ?>

                        <tbody>
                            <tr>
                                <th scope="row">
                                    <?= $gasto["fecha"] ?>
                                </th>
                                <th scope="row">
                                    <?= $gasto["categoria"] ?>
                                </th>
                                <td class="text-capitalize">
                                    <?= $gasto["descripcion"] ?>
                                </td>
                                <th>
                                    <?= $gasto["monto"] ?>
                                </th>
                                <td class="text-capitalize">
                                    <?= $gasto["tipo"] ?>
                                </td>
                            </tr>
                        <?php endforeach ?>

                </table>
            </div>
        </div>

    </div>
    <div>
        <h4 class="py-3 tp-3 text-success-emphasis bg-success-subtle border border-success-subtle rounded-3 container text-center">SALDO DISPONIBLE:
            <?php echo $ingreso['monto'] - $gasto['monto'] ?>
        </h4>
    </div>



    <div class="container my-3">
        <div id="piechart"></div>
        <div class="mx-auto" style="height: 300px; width:300px">
            <div class="figure">
                <canvas id="myChart" style="box-sizing: border-box; width: 375px; height:375px"
                    class="d-block mx-auto"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');


                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            <?php foreach ($grafica as $data) { ?>

                                                '<?= $data['categoria'] ?>',
                            <?php } ?>
                        ],
                        datasets: [{
                            label: '# de gastos',
                            data: [<?php foreach ($grafica as $data) { ?>

                                        <?= $data['porcentaje'] ?>,
                                <?php } ?>,],
                            borderWidth: 1
                        }]


                    },
                });

            </script>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>