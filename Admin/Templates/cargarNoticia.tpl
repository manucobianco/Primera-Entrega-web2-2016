<h1 class="page-header">Cargar Noticia</h1>
<form id="form-noticia" method="POST"enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputTituloNoticia">Titulo Noticia</label>
    <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" placeholder="Titulo de la Noticia" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia" placeholder="Contenido de la Noticia"required></textarea>
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
  <button type="submit" class="btn btn-default" id="btnCargarNoticia">Cargar Noticia</button>

</form>
<div class="messages panel"></div>

<h1 class="page-header">Noticias por Categoria</h1>
{if !empty($categorias)}
{foreach $categorias as $categoria}
<div class="categoria" id="{$categoria['categoria']}">
<h1 class="page-header">{$categoria['categoria']}</h1>
<table class="table table-bordered">
<thead>
    <th>
      Nombre
    </th>
    <th>
      Sub-Titulo
    </th>
    <th>
      Contenido
    </th>
    <th>
      Accion
    </th>
</thead>
<tbody id="tblBodyNoticia">
  {if !empty($noticias)}
  {$hayNoticias=false}
  {foreach $noticias as $noticia}
    {if $noticia['fk_id_categoriaNoticia'] == $categoria['id_categoriaNoticia']}
      {$hayNoticias=true}
      <tr>
        <td>{$noticia['nombre']}</td>
        <td>{$noticia['subTitulo']}</td>
        <td>{$noticia['contenido']}</td>
        <td>
          <a class="glyphicon glyphicon-trash borrar-noticia"href="index.php?action=borrar_noticia&id_noticia={$noticia['id_noticia']}"></a>
          <a class="glyphicon glyphicon-edit mostrar-modificar-noticia" href="index.php?action=mostrar_modificar_noticia&id_noticia={$noticia['id_noticia']}&nombre={$noticia['nombre']}&subTitulo={$noticia['subTitulo']}&contenido={$noticia['contenido']} "></a>
        </td>
        </tr>
    {/if}
  {/foreach}
  {if $hayNoticias==false}
  <tr>
    <td align="center"colspan="5">
      <b>No hay noticias en esta categoria.</b>
    </td>
  </tr>
  {/if}
  {else}
    <tr>
      <td align="center"colspan="3">
        <b>No hay Noticias.</b>
      </td>
    </tr>
  {/if}
</tbody>
</table>
{/foreach}
{else}
<h1 class="page-header">No hay noticias.</h1>
{/if}
<script type="text/javascript"src="js/upload.js"></script>
