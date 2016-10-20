
    <h1 class="page-header">Cargar discos</h1>
    <form action="#"enctype="multipart/form-data" method="REQUEST">
      <div class="form-group">
        <label for="inputTituloNoticia">Nombre del disco</label>
        <input type="text" class="form-control" id="inputNombreDisco"name="inputNombreDisco" placeholder="Nombre del disco..." required>
      </div>
      <div class="form-group">
        <label for="inputAnio">Año</label>
        <input type="text" class="form-control" id="inputAnio"name="inputAnio" placeholder="Año del disco..." required>
      </div>
      <div class="form-group">
        <label for="inputDiscografica">Discografica</label>
        <input type="text" class="form-control" id="inputDiscografica"name="inputDiscografica" placeholder="Nombre de la Discografica..." required>
      </div>
      <button type="submit" class="btn btn-default" id="btnCargarDisco">Cargar Disco</button>
    </form>
  <div class="messages panel"></div>

  <h1 class="page-header">Discos</h1>

  <table class="table table-bordered">
    <thead>
        <th>
          Nombre
        </th>
        <th>
          A&ntilde;o
        </th>
        <th>
          Discografica
        </th>
        <th>
          Accion
        </th>
    </thead>
    <tbody id="tblBodyDiscos">
      {if !empty($discos)}
      {foreach $discos as $disco}
          <tr>
            <td>{$disco['nombre']}</td>
            <td>{$disco['anio']}</td>
            <td>{$disco['discografica']}</td>
            <td>
              <a class="glyphicon glyphicon-trash borrar-disco"href="index.php?action=borrar_disco&id_disco={$disco['id_disco']}"></a>
              <a class="glyphicon glyphicon-edit mostrar-modificar-disco" href="index.php?action=mostrar_modificar_disco&id_disco={$disco['id_disco']}&nombre={$disco['nombre']}&anio={$disco['anio']}&discografica={$disco['discografica']}"></a>
            </td>
          </tr>
      {/foreach}
      {else}
        <tr>
          <td colspan="4">
            <b>No hay Discos.</b>
          </td>
        </tr>
      {/if}
    </tbody>
    </table>

<script type="text/javascript"src="js/upload.js"></script>
