<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Disco</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" id="wrap">
      <h1 class="page-header">Modificar Disco</h1>
      <form action="#"enctype="multipart/form-data" method="REQUEST">
        <input type="hidden" name="id_disco" id="id-disco"value="{$id_disco}">
        <div class="form-group">
          <label for="inputTituloNoticia">Nombre del disco</label>
          <input type="text" class="form-control" id="inputNombreDisco"name="inputNombreDisco" value="{$nombre}"placeholder="Nombre del disco..." required>
        </div>
        <div class="form-group">
          <label for="inputAnio">Año</label>
          <input type="text" class="form-control" id="inputAnio"name="inputAnio" value="{$anio}"placeholder="Año del disco..." required>
        </div>
        <div class="form-group">
          <label for="inputDiscografica">Discografica</label>
          <input type="text" class="form-control" id="inputDiscografica"name="inputDiscografica"value="{$discografica}" placeholder="Nombre de la Discografica..." required>
        </div>
        <button type="submit" class="btn btn-default" id="btnModificarDisco">Modificar Disco</button>
      </form>

    </div>
    <script src="js/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="js/upload.js" charset="utf-8"></script>
  </body>
</html>
