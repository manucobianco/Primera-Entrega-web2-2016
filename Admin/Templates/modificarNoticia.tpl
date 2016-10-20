<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Noticia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" id="wrap">
      <h1 class="page-header">Modificar Noticia</h1>
      <form action="#"enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id-noticia" id="id-noticia"value="{$id_noticia}">
        <div class="form-group">
          <label for="inputTituloNoticia">Titulo Noticia</label>
          <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" value="{$titulo}"placeholder="Titulo de la Noticia" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia"placeholder="Contenido de la Noticia"required>{$contenido}</textarea>
        </div>
        <label for="categoria">Categoria</label>
        <select class="form-control" id="categoria"name="categoria">
          {foreach $categorias as $categoria}
          <option value="{$categoria['id_categoriaNoticia']}">{$categoria['categoria']}</option>
          {/foreach}
        </select>
        <button type="submit" class="btn btn-default" id="btnModificarNoticia">Modificar Noticia</button>

      </form>

    </div>
    <script src="js/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="js/upload.js" charset="utf-8"></script>
  </body>
</html>
