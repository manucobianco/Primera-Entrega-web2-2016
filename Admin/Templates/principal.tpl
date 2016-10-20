<h1 class="page-header">Pagina de Administracion</h1>
<div class=container>
  <table class="table table-bordered">
    <thead>
        <th>
          Nombre
        </th>
        <th>
          Email
        </th>
        <th>
          Opinion
        </th>
        <th>
          Acciones
        </th>
    </thead>
    <tbody id="tblBodyOpinion">{if !empty($opiniones)}
    {foreach $opiniones as $opinion}
        <tr>
          <td>{$opinion['nombre']}</td>
          <td>{$opinion['email']}</td>
          <td>{$opinion['opinion']}</td>
          <td><a class="glyphicon glyphicon-trash borrar-opinion" href="admin.php?action=borrar_opinion&id_opinion={$opinion['id_opinionUsuario']}"></a></td>
        </tr>
    {/foreach}
    {else}
      <tr>
        <td align="center"colspan="4"><b>No hay opiniones.<b/></td>
      </tr>
    {/if}
    </tbody>
    </table>

</div>
