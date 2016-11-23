<?php /* Smarty version 3.1.27, created on 2016-11-24 00:42:32
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\cargarUsuario.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3269958362968949f85_45069146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dcaaba4a6a84a16705b875517bb314a36428909' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\cargarUsuario.tpl',
      1 => 1479944548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269958362968949f85_45069146',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58362968982308_27855185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58362968982308_27855185')) {
function content_58362968982308_27855185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3269958362968949f85_45069146';
?>
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
        <?php if (!empty($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['usuarios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['usuario']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
$foreach_usuario_Sav = $_smarty_tpl->tpl_vars['usuario'];
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value['tipo'] == 0) {?>
                  Usuario
                <?php } else { ?>
                  Administrador
                <?php }?>
              </td>
              <td>
                <a class="glyphicon glyphicon-edit modificar-usuario" href="index.php?action=modificar_usuario&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"></a>
              </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['usuario'] = $foreach_usuario_Sav;
}
?>
        <?php } else { ?>
          <tr>
            <td colspan="3"><b>No hay usuarios.<b/></td>
          </tr>
        <?php }?>
      </tbody>
    </table>

<?php echo '<script'; ?>
 type="text/javascript"src="js/upload.js"><?php echo '</script'; ?>
>
<?php }
}
?>