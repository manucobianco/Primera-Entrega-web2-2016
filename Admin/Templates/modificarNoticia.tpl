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
      <form id="form-modificar-noticia"enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id-noticia" id="id-noticia"value="{$id_noticia}">
        <div class="form-group">
          <label for="inputTituloNoticia">Titulo Noticia</label>
          <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" value="{$titulo}"placeholder="Titulo de la Noticia" required>
        </div>
        <div class="form-group">
          <label for="inputSubTituloNoticia">Sub-Titulo Noticia</label>
          <input type="text" class="form-control" id="inputSubTituloNoticia"name="inputSubTituloNoticia" value="{$subTitulo}"placeholder="Sub-Titulo de la Noticia" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia"placeholder="Contenido de la Noticia"required>{$contenido}</textarea>
        </div>
        <div class="form-group">
          <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
          <label for="inputFile">Cargar Imagenes</label>
          <input type="file" id="input-imagen"name="imagen[]" multiple="multiple">
          <p class="help-block">tipos de imagen admitidas: .gif .png .jpg .jpeg</p>
        </div>
        <label for="categoria">Categoria</label>
        <select class="form-control" id="categoria"name="categoria">
          {foreach $categorias as $categoria}
          <option value="{$categoria['id_categoriaNoticia']}">{$categoria['categoria']}</option>
          {/foreach}
        </select>
        <button type="submit" class="btn btn-default" id="btnModificarNoticia">Modificar Noticia</button>
        <h1 class="page-header">Imagenes</h1>
        <table class="table table-bordered">
          <thead>
            <th>Imagen</th>
            <th>Accion</th>
          </thead>
          <tbody id="tablaImagenes">
            {if count($imagenes)>0}
            {foreach $imagenes as $imagen}
            <tr>
              <td><img src="{$imagen['path']}"/></td>
              <td><a class="glyphicon glyphicon-trash borrar-imagen-noticia"href="index.php?action=borrar_imagen_noticia&id_imagendenoticia={$imagen['id_imagendenoticia']}"></a>
              </td>
            </tr>
            {/foreach}
            {else}
            <tr>
              <td colspan="2">No hay imagenes.</td>
            </tr>
            {/if}
          </tbody>
        </table>
      </form>

    </div>
    <script src="js/jquery-2.1.4.min.js" charset="utf-8"></script>
    <script src="js/upload.js" charset="utf-8"></script>
  </body>
</html>
