<h1 class="page-header">Usuarios</h1>
  <table class="table table-bordered">
      <thead>
          <th>
            Email
          </th>
          <th>
            Tipo de Usuario
          </th>
          <th>
            Cambiar Permisos
          </th>
      </thead>
      <tbody id="tblBodyUsuario">
        {if !empty($usuarios)}
        {foreach $usuarios as $usuario}
            <tr>
              <td>{$usuario['email']}</td>
              <td>
                {if $usuario['tipo']== 1}
                  Usuario
                {else}
                  Administrador
                {/if}
              </td>
              <td>
                <a class="glyphicon glyphicon-edit modificar-usuario" href="index.php?action=modificar_usuario&id_usuario={$usuario['id']}"></a>
              </td>
            </tr>
        {/foreach}
        {else}
          <tr>
            <td colspan="3"><b>No hay usuarios.<b/></td>
          </tr>
        {/if}
      </tbody>
    </table>

<script type="text/javascript"src="js/upload.js"></script>
