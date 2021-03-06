<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANDEA</title>

    <link rel = "shortcut icon" type = "image / x-icon" href = "Andea/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="Andea/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Andea/fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="Andea/css/style.css">
    <link rel="stylesheet" type="text/css" href="Andea/css/prettyPhoto.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="Andea/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <!-- Navigation
        ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      
      <div class="container"> 
        
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="Andea.html">ANDEA </a> 
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" class="page-scroll">Inicio</a></li>
            <li><a href="#about-section" class="page-scroll">Resumen</a></li>
            <li><a href="#services-section" class="page-scroll">Contenido</a></li>
            <li><a href="#works-section" class="page-scroll">Imagenes</a></li>
            <li><a href="#team-section" class="page-scroll">Participantes</a></li>
            <li><a href="#contact-section" class="page-scroll">contacto</a></li>
            <li><a href="cerrar.php">Cerrar Sesion</a></li>
          </ul>

        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>

    <!-- Header -->

    <header class="text-center" name="home">
      
      <div class="intro-text">

        <div class="space"></div>

        <div class="space"></div>

        <div class="space"></div>

        <h1><span class="color"></span></h1>

        <p></p>

        <div class="clearfix"></div>
      
    </header>

    <!-- About Section -->

    <div id="about-section">

      <div class="container"> 

        <div class="section-title"> 
          <h2>AN??LISIS DE DATOS ECOL??GICOS Y AMBIENTALES  </h2> 
        </div>

        <div class="space"></div>

        <div class="row">

          <div class="col-md-6">
            <h4>Resumen</h4>
            <p>Este espacio web, se encuentra relacionado al proyecto ???Herramienta para el an??lisis de datos biol??gicos y ambientales en el programa R???, soportado por el Grupo de Investigaci??n en Ecolog??a Neotropical - GIEN y avalado por la Universidad del Magdalena, orientado a la generaci??n de un espacio web en el que se puedan efectuar procedimientos para el an??lisis de datos ecol??gicos y ambientales, mediante c??digos del entorno R, abordando diferentes aspectos de la bioestad??stica y el an??lisis multivariado.  </p>
          </div>

          <div class="col-md-6">
            <h4>Presentacion</h4>
            <p>El an??lisis de datos en herramientas de distribuci??n gratuita ha sido una tendencia en las ??ltimas d??cadas, dada las facilidades que ofrece a usuarios, en especial para pa??ses en v??a de desarrollo, como es el caso de Colombia. Es por ello, que a continuaci??n se ofrecen herramientas de entorno web y un repositorio de comandos orientados al an??lisis de datos ecol??gicos y ambientales, iniciando con la exploraci??n de patrones gr??ficos, siguiendo con las transformaciones y estandarizaciones y finalizando con diferentes t??cnicas multivariadas y el an??lisis de diversidad taxon??mica. Esta informaci??n ser?? complementada por un texto gu??a que contextualiza a las diferentes tem??ticas tratadas.</p>
          </div>
           
        </div>

      </div>

      <!-- Services Section -->
      <div id="services-section">
        <div class="container">
          <div class="section-title">
            <h2>Contenido</h2>
            <hr>
          </div>

          <div class="row">

            <div class="container">

              <div class="row">

                <div class="col"> <p> Algunos comandos no son soportados por las dos herramientas web presentadas, para esto recomendamos descargar la aplicaci??n de escritorio. para esto se debe descargar dos archivos ( <a class="link" href="https://cran.r-project.org/bin/windows/base/"  target="_blank">1 </a>, <a class="link" href="https://www.rstudio.com/products/rstudio/download/#download" target="_blank">2 </a>) . </p></div>
              
                <div class="col"> <p> Plataformas ??? <a href="https://colab.research.google.com/notebooks/intro.ipynb#scrollTo=KxEMH7Xf1J_G" target="_blank">Google Colab</a>  y <a href="https://rstudio.cloud/projects" target="_blank">RStudio Cloud</a> </p></div>
                <div class="col"> <p> Guias ??? <a href="https://github.com/grupo-gien/Manual-Google-Colab" target="_blank">Google Colab</a>  y <a href="https://github.com/grupo-gien/Intro-a-R" target="_blank">RStudio Cloud</a> </p></div>
                <div class="col"><p>1. Introducci??n - <a href="https://github.com/grupo-gien/1.-Introduccion/blob/main/1.%20Introducci%C3%B3n.pdf" target="_blank">PDF</a> </p></div>
                <div class="col"><p>2. Intro a R y RStudio - <a href="https://github.com/grupo-gien/2.-Intro-a-R-y-RStudio/blob/main/2.%20Intro%20a%20R%20y%20RStudio.pdf" target="_blank">PDF</a> </p></div>
                <div class="col"><p>3. Algebra Lineal - ( <a href="https://github.com/grupo-gien/3.-Algebra-Lineal" target="_blank">Archivos</a> , <a href="https://github.com/grupo-gien/3.-Algebra-Lineal/blob/main/3.%20Algebra%20Lineal.pdf" target="_blank"> PDF</a> , <a href="https://rstudio.cloud/project/2447152" target="_blank">R online</a> ) </p></div>
                <div class="col"><p>4. Exploraci??n gr??fica - ( <a href="https://github.com/grupo-gien/4.-Exploraci-n-gr-fica" target="_blank">Archivos</a> , <a href="https://github.com/grupo-gien/4.-Exploraci-n-gr-fica/blob/main/4.%20Exploraci%C3%B3n%20gr%C3%A1fica.pdf" target="_blank">PDF</a> , <a href="https://colab.research.google.com/drive/1FNA8Uumg6fsWxit8e0aaubA4qyQpnAob?authuser=1" target="_blank">Google Colab</a> , <a href="https://rstudio.cloud/project/2405206" target="_blank">R online</a> ) </p></div>
                <div class="col"><p>5. Transformaciones y Estandarizaciones - ( <a href="https://github.com/grupo-gien/5.-Transformaciones-y-Estandarizaciones" target="_blank">Archivos</a> , <a href="https://github.com/grupo-gien/5.-Transformaciones-y-Estandarizaciones/blob/main/5.%20Transformaciones%20y%20Estandarizaciones.pdf" target="_blank">PDF</a> , <a href="https://drive.google.com/drive/u/1/folders/17Ho6UtrVN_HlPKyWMxCX9sMOm82mh0u-" target="_blank">Google Colab</a> , <a href="https://rstudio.cloud/project/2405235" target="_blank">R online</a> ) </p></div>
                <div class="col"><p>6. Analisis de Ordenaci??n - ( <a href="https://github.com/grupo-gien/6.-Analisis-de-Ordenaci-n" target="_blank">Archivos</a> , <a href="https://github.com/grupo-gien/6.-Analisis-de-Ordenaci-n/blob/main/6.%20Analisis%20de%20Ordenaci%C3%B3n.pdf" target="_blank">PDF</a> , <a href=""></a><a href="https://rstudio.cloud/project/2405254" target="_blank">R online</a> ) </p></div>
                <div class="col"><p>7. Analisis de clasificaci??n - <a href=""></a> </p></div>
                <div class="col"><p>8. Analisis no param??tricos - <a href=""></a> </p></div>
              
                <!--<div class="col"><p>Exploraci??n ??? Figuras multivariadas (<a href="https://drive.google.com/drive/folders/1Tl64VjwCebALgswyTxJ85QTnRBYHcG3E?usp=sharing">Ejecutable, <a href="https://github.com/grupo-gien/Exploratorios-en-R">Archivos</a> </a>)</p></div> -->
              
              </div>

            </div>

          </div>

        </div>

      </div>
    
      <!-- Portfolio Section -->
      <div id="works-section">

        <div class="container"> <!-- Container -->

          <div class="section-title">
            <h2>Imagenes</h2>
            <hr>
            <div class="clearfix"></div>
          </div>

          <div class="row">

            <div class="portfolio-items">

              <div class="col-sm-6 col-md-3 col-lg-3 web">

                <div class="portfolio-item">

                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 1.png" rel="prettyPhoto">
                    
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                    
                    <img src="Andea/img/portfolio/imagen 1.png" class="img-responsive" alt=""> </a> 
                  
                  </div>
                
                </div>
              
              </div>
            
              <div class="col-sm-6 col-md-3 col-lg-3 app">
                
                <div class="portfolio-item">
                  
                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 2.png" rel="prettyPhoto">
                    
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                 
                  <img src="Andea/img/portfolio/imagen 2.png" class="img-responsive" alt=""> </a> 
                  
                  </div>
                
                </div>
              
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3 web">

                <div class="portfolio-item">

                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 3.png" rel="prettyPhoto">
                    
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                  
                  <img src="Andea/img/portfolio/imagen 3.png" class="img-responsive" alt=""> </a> 
                  
                  </div>
                
                </div>
              
              </div>
              
              <div class="col-sm-6 col-md-3 col-lg-3 web">
                
                <div class="portfolio-item">
                  
                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 9.png" rel="prettyPhoto">
                   
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                    
                    <img src="Andea/img/portfolio/imagen 9.png" class="img-responsive" alt=""> </a> 
                   
                    </div>
                
                </div>
              
              </div>
            
              <div class="col-sm-6 col-md-3 col-lg-3 app">
                
                <div class="portfolio-item">
                  
                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 10.png" rel="prettyPhoto">
                    
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                    
                    <img src="Andea/img/portfolio/imagen 10.png" class="img-responsive" alt=""> </a> 
                  
                  </div>
                
                </div>
              
              </div>
            
              <div class="col-sm-6 col-md-3 col-lg-3 branding">
                
                <div class="portfolio-item">
                  
                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 6.png" rel="prettyPhoto">
                    
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                    
                    <img src="Andea/img/portfolio/imagen 6.png" class="img-responsive" alt=""> </a> 
                  
                  </div>
                
                </div>
              
              </div>
            
              <div class="col-sm-6 col-md-3 col-lg-3 branding app">
              
                <div class="portfolio-item">
                
                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 7.png" rel="prettyPhoto">
                  
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                  
                    <img src="Andea/img/portfolio/imagen 7.png" class="img-responsive" alt=""> </a> 
                
                  </div>
              
                </div>
            
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3 web">
              
                <div class="portfolio-item">
                
                  <div class="hover-bg"> <a href="Andea/img/portfolio/imagen 8.png" rel="prettyPhoto">
                  
                    <div class="hover-text">
                      <h4>GIEN</h4>
                      <small>Generado Rstudio</small>
                      <div class="clearfix"></div>
                    </div>
                  
                    <img src="Andea/img/portfolio/imagen 8.png" class="img-responsive" alt=""> </a> 
                
                  </div>
              
                </div>
            
              </div>
          
            </div>
        
          </div>

        </div>

      </div>

      <!-- Team Section -->

      <div id="team-section">

        <div class="container">

          <div class="section-title">
            <h2>Colaboradores</h2>
            <hr>
          </div>

          <div id="row">

            <div class="col-md-3 col-sm-6 team">

              <div class="thumbnail"> <img src="Andea/img/team/GIEN LOGO.png" alt="..." class="team-img">
                <div class="caption"></div>
              </div>

            </div>

            <div class="col-md-3 col-sm-6 team">

              <div class="thumbnail"> <img src="Andea/img/team/BIOLOGIA LOGO.png" alt="..." class="team-img">
                <div class="caption"></div>
              </div>

            </div>

            <div class="col-md-3 col-sm-6 team">

              <div class="thumbnail"> <img src="Andea/img/team/UNIMAG LOGO.png" alt="..." class="team-img">
                <div class="caption"></div>
              </div>

            </div>

            <div class="col-md-3 col-sm-6 team">

              <div class="thumbnail"> <img src="Andea/img/team/ANDEA LOGO.png" alt="..." class="team-img">
                <div class="caption"></div>
              </div>

            </div>
      
          </div>

        </div>

      </div>

      <!-- Contact Section -->

      <div id="contact-section">

        <div class="container">

          <div class="section-title center">
            <h2>Contacto</h2>
            <hr>
          </div>

          <div class="col-md-4">

            <h4>Informacion</h4>

            <div class="space"></div>
            
            <p><i class="fa fa-map-marker"></i>Colombia<br>Magdalena, Santa Marta</p>
           
            <div class="space"></div>
            
            <p><i class="fa fa-envelope-o"></i>grupodeinvestigacion.gien@gmail.com </p>
            
            <div class="space"></div>
            
            <p><i class="fa fa-phone"></i>+57 300000000</p>
          
          </div>
        
        </div>
      </div>
    
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
      <script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script type="text/javascript" src="js/bootstrap.js"></script> 
      <script type="text/javascript" src="js/SmoothScroll.js"></script> 
      <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
      <script type="text/javascript" src="js/jquery.isotope.js"></script> 
      <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
      <script type="text/javascript" src="js/contact_me.js"></script> 

      <!-- Javascripts
      ================================================== --> 
      <script type="text/javascript" src="Andea/js/main.js"></script>
  
  </body>

</html>