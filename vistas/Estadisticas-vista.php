<!doctype html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Andea-Panel</title>

    <link rel = "shortcut icon" type = "image / x-icon" href = "Andea/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="dashboard/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">

  </head>

  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

      <a class="navbar-brand col-md-2 col-lg-2 me-0 px-3" href="principal.php">Andea</a>

      <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <ul class="navbar-nav px-3">

        <li class="nav-item text-nowrap">
          <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
        </li>

      </ul>

    </header>

    <div class="container-fluid">

      <div class="row">

        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

          <div class="position-sticky pt-3">

            <ul class="nav flex-column">

              <li class="nav-item">

                <a class="nav-link" href="panel.php">
                  <span data-feather="home"></span>
                  Principal
                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link active" aria-current="page" href="Estadisticas.php">
                  <span data-feather="bar-chart-2"></span>
                  Estadisticas
                </a>

              </li>

            </ul>

            <ul class="nav flex-column mb-2"></ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      

          <h2>Por instituciones</h2>

          <div class="table-responsive">

            <table class="table table-striped table-sm">

              <thead>

                <tr>
                  <th>Nombre</th>
                  <th>Profesores</th>
                  <th>Estudiantes</th>
                  <th>Otros</th>
                  <th>total</th>
                </tr>

              </thead>

              <tbody>

                <?php foreach ($data_table as $t) { ?>

                  <tr>
                    <td><?=$t['institucion']?></td>
                    <td><?=$t['docente']?></td>
                    <td><?=$t['estudiante']?></td>
                    <td><?=$t['otro']?></td>
                    <td><?=$t['total']?></td>
                  </tr>

                <?php } ?>

              </tbody>

            </table>

          </div>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">total de roles</h1>
          </div>

          <canvas class="my-4 w-100" id="densityCanvas" width="600" height="400"></canvas>
      
        </main>

      </div>

    </div>

    <script src="dashboard/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard/dashboard.js"></script>

  </body>

  <script>
    var barChart = new Chart(densityCanvas, {
      type: 'bar',
      data: {
        labels: ["Docentes", "Estudiantes", "Otros"],
        datasets: [{
          data: [ <?=$data[0]?>, <?=$data[1]?>, <?=$data[2]?> ]
        }],
      },
      // options: chartOptions
    });
  </script>
  
</html>
