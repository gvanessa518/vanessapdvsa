<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDVSA - Gráficas</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <link href="vista/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/to-do-list.ico" type="image/x-icon">

</head>

<body>


    <?php

        session_start();
        $desde = $_SESSION['fdesde'];
        $hasta = $_SESSION['fhasta'];
    
        $con = new mysqli('localhost','root','','pdvsa');
        $query = $con->query("SELECT p.nombre, r.psi FROM pozo p JOIN registro r ON p.ID = r.ID_pozo WHERE DATE_FORMAT(r.fecha, '%Y-%m-%d') BETWEEN '$desde' AND '$hasta'");

        foreach($query as $data){
            $nombre[] = $data['nombre'];
            $psi[] = $data['psi'];
        }

    ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container-fluid">
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/pdvsa.svg" alt="Bootstrap" width="130" height="110">
        </a>
      </div>
    </nav>
  </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <br><br>

    <h1>Gráfica comparativa</h1>

    <div class="container" >
        <canvas id="myChart"></canvas>
    </div>
    <br><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold" href="registro.php" role="button">Realizar un registro</a>
          <a class="btn btn-outline-secondary btn-lg px-4" href="fechas.php" role="button">Ver otra grafica</a>
          <a class="btn btn-outline-secondary btn-lg px-4" href="listado.php" role="button">Ver historial</a>
    </div>

    <br><br>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: <?php echo json_encode($nombre) ?>,
            datasets: [{
                label: 'Nombre del Pozo / PSI',
                data: <?php echo json_encode($psi) ?>,
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    </script>


</body>


</html>