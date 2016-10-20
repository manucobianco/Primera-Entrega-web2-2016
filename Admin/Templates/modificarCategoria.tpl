<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Categoria</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" id="wrap">
      <h1 class="page-header">Modificar categoria</h1>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" id="id-categoria"name="id-categoria" value="{$id_categoria}">
          <label for="inputNombreCategoria">Nombre de la Categoria</label>
          <input type="text" class="form-control" id="inputNombreCategoria" name="inputNombreCategoria" value="{$categoria}"placeholder="ingrese el nombre de la categoria" required>
        </div>
        <button type="submit" class="btn btn-default" id="btnModificarCategoria">Modificar Categoria</button>
      </form>
    </div>
    <script src="js/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="js/upload.js" charset="utf-8"></script>
  </body>
</html>
