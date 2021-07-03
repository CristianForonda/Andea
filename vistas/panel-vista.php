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

     <!--datables CSS básico-->
     <link rel="stylesheet" type="text/css" href="dashboard/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  

    

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

                <a class="nav-link active" aria-current="page" href="panel.php">
                  <span data-feather="home"></span>
                    Principal
                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="estadisticas.php">
                  <span data-feather="bar-chart-2"></span>
                    Estadisticas
                </a>

              </li>

            </ul>

        
            <ul class="nav flex-column mb-2">
          
            </ul>

          </div>

        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

          <ul class="nav flex-column mb-2">
          
          </ul>

          <h2>Listado</h2>

          <select id="state" class="form-select" name="filtros" aria-label="Default select example">
            <option value="">Todos</option>
            <option value="1" <?=$_GET['filtros']=="1"?"selected":""?>>Aceptados</option>
            <option value="0" <?=$_GET['filtros']=="0"?"selected":""?>>No Aceptados</option>
          </select> 

      
          <div class="table-responsive">

            <table id="table" class="table table-striped table-bordered" style="width:100%">

              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Institucion</th>
                  <th>Rol</th>
                  <th>Estado</th>
                </tr>
              </thead>

              <tbody>

                <?php foreach ($users as $u) { ?>

                  <tr>
                    <td><?=$u['id']?> <span style="display: none;">(<?=$u['is_active']?1:0?>)</span></td>
                    <td><?=$u['nombre']?></td>
                    <td><?=$u['apellido']?></td>
                    <td><?=$u['correo']?></td>
                    <td><?=$u['institucion']?></td>
                    <td><?=$u['rol']?></td>

                    <td>

                      <div class="form-check form-switch">
                        <input data-user_id="<?=$u['id']?>" class="form-check-input" <?=$u['is_active']?'checked':''?> type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                      </div>

                    </td>

                  </tr>

                <?php } ?>

              </tbody>

            </table>

          </div>

        </main>

      </div>

    </div>


    <script src="dashboard/assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dashboard/datatables/datatables.js"></script>   

  </body>

  <script>
    table = $(table).DataTable();
    $(state).on('change', function() {
      table.columns(0).search(this.value ? `(${this.value})` : '').draw();
      window.history.pushState({ }, "", `?filtros=${$(state).val()}`);
    }).trigger('change');
    table.on('change', '.form-check-input', function () {
      $.post("", { aprobar: true, ... this.dataset }, function () { location.reload() });
    });
  </script>
  
</html>
