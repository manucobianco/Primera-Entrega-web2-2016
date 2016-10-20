<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="images/rataVioleta.png"/>
    <head>
      <title>El Cuarteto De Nos - Home</title>
    </head>
    <body>

    <!--Barra del nav-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="lnkHome1" href="">El Cuarteto De Nos</a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li><a id="lnkHome" href="">Home</a></li>
                  <li><a id="lnkIntegrantes" href="">Integrantes</a></li>
                  <li><a id="lnkDiscos" href="">Discos</a></li>
                  <li><a id="lnkNoticias" href="">Noticias</a></li>

                        <!--Botones desplegables-->
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contactos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="https://es-es.facebook.com/cuartetodenos"target="_blank">Facebook</a></li>
                          <li><a href="https://twitter.com/cuartetodenos"target="_blank">Twitter</a></li>
                          <li><a href="https://www.youtube.com/user/cuartetodenos"target="_blank">Youtube</a></li>
                          <li class="divider"></li>
                            <li><a id="lnkOpinion" href="">Envianos tu mail</a></li>
                        </ul>
                       </li>
                    <!------------------------------------------------->
                    <div class="dropdown">
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <!------------------------------------------------->

                </ul>
              </div>
            </div>
      </nav>
      <div class="jumbotron">
        <img src="images/Home.png" alt="Foto Home"/>
      </div>
      <!--Contenido-->

      <div class="row">
        <div id="contenido" class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
      </div>







      <!--Scripts de JS-->
      <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/ajax.js"></script>
    </body>
</html>
