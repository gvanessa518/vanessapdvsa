<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <link href="vista/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/to-do-list.ico" type="image/x-icon">

</head>

  <body>
    
<main>

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

  <div class="bg-dark text-secondary container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-white">Registro de Mediciones</h1><br>
       
        <div>
            <form action="php/operaciones.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id_pozo" name="nombre">
                    <label for="id_pozo">Nombre del pozo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id_psi" name="psi" inputmode="numeric">
                    <label for="id_psi">Valor registrado en PSI</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="id_zona" name="zona">
                    <label for="id_zona">Zona</label>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <input type="submit" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold" id="btn-registro" name="btn" value="Registrar">
                    
                    <a class="btn btn-outline-light btn-lg px-4" href="fechas.php" role="button">Ver graficas</a>
                    <a class="btn btn-outline-light btn-lg px-4" href="listado.php" role="button">Ver historial</a>                  
                </div>

            </form>
        </div><br>
              
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>


</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>


</html>