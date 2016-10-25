    <h1 class="page-header">Cargar imagen</h1>
    <form action="#" id="form-imagen"enctype="multipart/form-data" method="post">
      <div class="form-group">
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <label for="inputFile">Cargar Imagenes</label>
        <input type="file" id="input-imagen"name="imagen" required>
        <p class="help-block">tipos de imagen admitidas: .gif .png .jpg .jpeg</p>
      </div>
      <div class="form-group">
        <label for="inputDescripcion">Descripci&oacute;n</label>
        <input type="text" class="form-control" id="inputDescripcion"name="inputDescripcion" placeholder="Descripcion de la imagen..." required>
      </div>
      <button type="submit" class="btn btn-default"id="btnCargarImagen">Cargar imagenes</button>
    </form>
    <div id="vista-previa"></div>
	  <div id="respuesta"></div>
    <h1 class="page-header">Imagenes</h1>
      <table class="table table-bordered">
          <thead>
              <th>
                Nombre
              </th>
              <th>
                Imagen
              </th>
              <th>
                Borrar
              </th>
          </thead>
          <tbody id="tblBodyImagen">
            {if !empty($imagenes)}
            {foreach $imagenes as $imagen}
                <tr>
                  <td>{$imagen['nombre']}</td>
                  <td><img alt="{$imagen['nombre']}"src="{$imagen['path']}"></td>
                  <td><a class="glyphicon glyphicon-trash borrar-imagen" href="index.php?action=borrar_imagen&id_imagen={$imagen['id_imagen']}"></a></td>
                </tr>
            {/foreach}
            {else}
              <tr>
                <td colspan="3"><b>No hay imagenes.<b/></td>
              </tr>
            {/if}
          </tbody>
        </table>

    <script type="text/javascript"src="js/upload.js"></script>
