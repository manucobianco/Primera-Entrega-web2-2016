<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administracion-{block name="title"}{/block}</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <img src="images/rataBlanca.png"/>
    </div>
    {block name="wrap"}
    <div class="container" id="wrap">
      <ul class="nav nav-pills">
        <li role="presentation" class="active"id="home"><a class="home" href="#">Administrar Opiniones</a></li>
        <li role="presentation"id="cargarImagenes"><a class="cargar-imagenes" href="#">Administrar Imagenes</a></li>
        <li role="presentation" id="cargarNoticias"><a class="cargar-noticia" href="#">Administrar Noticias</a></li>
        <li role="presentation"id="crearCategoria"><a class="crear-categoria" href="#">Administrar Categorias</a></li>
        <li role="presentation"id="cargarDisco"><a class="cargar-disco" href="#">Administrar Discos</a></li>
      </ul>
      <div id="contenido">
        <h1 class="page-header">Pagina de Administracion</h1>
        {block name="opiniones"}
        {/block}
      </div>
    </div>
    {/block}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/admin.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
