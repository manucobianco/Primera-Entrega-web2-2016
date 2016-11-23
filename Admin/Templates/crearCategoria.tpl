<h1 class="page-header">Crear Categoria</h1>
<form action="#" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputNombreCategoria">Nombre de la Categoria</label>
    <input type="text" class="form-control" id="inputNombreCategoria" name="inputNombreCategoria" placeholder="ingrese el nombre de la categoria" required>
  </div>
  <button type="submit" class="btn btn-default" id="btnCrearCategoria">Crear Categoria</button>
</form>
<h1 class="page-header">Categorias</h1>
  <table class="table table-bordered">
      <thead>
          <th>
            Nombre
          </th>
          <th>
            Acciones
          </th>
      </thead>
      <tbody id="tblBodyCategorias">
        {if !empty($categorias)}
        {foreach $categorias as $categoria}
            <tr>
              <td>{$categoria['categoria']}</td>
              <td>
                <a class="glyphicon glyphicon-trash borrar-categoria" href="index.php?action=borrar_categoria&id_categoriaNoticia={$categoria['id_categoriaNoticia']}"></a>
                <a class="glyphicon glyphicon-edit mostrar-modificar-categoria" href="index.php?action=mostrar_modificar_categoria&id_categoriaNoticia={$categoria['id_categoriaNoticia']}&categoria={$categoria['categoria']}"></a>
              </td>
            </tr>
        {/foreach}
        {else}
          <tr>
            <td colspan="2"><b>No hay Categorias.<b/></td>
          </tr>
        {/if}
      </tbody>
    </table>

<script src="js/upload.js"></script>
