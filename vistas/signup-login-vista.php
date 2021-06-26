<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login/css/style.css" />
    <title>Andea</title>

    <link rel = "shortcut icon" type = "image / x-icon" href = "Andea/favicon.ico">
  </head>

  <body>
    <div class="container">

      <div class="forms-container">

        <div class="signin-signup">

          <form action="login.php" class="sign-in-form" method="post">

            <h2 class="title">Iniciar Sesión</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email_usuario" placeholder="Correo Electronico" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_usuario" placeholder="Contraseña" />
            </div>

            <input type="submit" value="Ingresar" class="btn solid" />

            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>

            <!--
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            -->
            
          </form>

          <form action="register.php" class="sign-up-form" method="post">

            <h2 class="title">Registrar</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nombre" placeholder="Nombre" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="apellido" placeholder="Apellido" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email_registrar" placeholder="Correo Electronico" />
            </div>

            <div class="input-field">
              <i class="fas fa-school"></i>
              <input type="text" name="institucion" placeholder="Intitucion educatiba" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_registrar" placeholder="Password" />
            </div>

            <div class="input-field">
              <i class="fas fa-school"></i>
              <select class="form-select form-select-lg mb-3" name="rol" aria-label=".form-select-lg example">
                <option selected>Rol</option>
                <option value="estudiante">Estudiante</option>
                <option value="docente">Docente</option>
                <option value="otro">Otro</option>
              </select>
            </div>       

            <input type="submit" class="btn" value="Crear cuenta" />

            <!--
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            -->

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes cuenta?</h3>
            <p>
              Registrate fácil mente llenando los siguientes datos
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrar
            </button>
          </div>
          <img src="login/img/white_logo_transparent_background.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes una cuenta?</h3>
            <p>
              Solo podras iniciar sesion hasta ser aprobado, esto se te notificara al correo electronico proporcionado.
            </p>

            <button class="btn transparent" id="sign-in-btn">
              Inicia sesión
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login/js/app.js"></script>
  </body>
</html>
