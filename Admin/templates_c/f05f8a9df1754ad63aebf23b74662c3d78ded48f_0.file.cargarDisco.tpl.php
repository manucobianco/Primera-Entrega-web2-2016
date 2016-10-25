<?php /* Smarty version 3.1.27, created on 2016-10-25 02:31:43
         compiled from "D:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\cargarDisco.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8189580ea7ef4c0242_18261066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f05f8a9df1754ad63aebf23b74662c3d78ded48f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\cargarDisco.tpl',
      1 => 1477354188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8189580ea7ef4c0242_18261066',
  'variables' => 
  array (
    'discos' => 0,
    'disco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_580ea7ef6566a9_19101562',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580ea7ef6566a9_19101562')) {
function content_580ea7ef6566a9_19101562 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8189580ea7ef4c0242_18261066';
?>
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
      <?php if (!empty($_smarty_tpl->tpl_vars['discos']->value)) {?>
      <?php
$_from = $_smarty_tpl->tpl_vars['discos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['disco'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['disco']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->_loop = true;
$foreach_disco_Sav = $_smarty_tpl->tpl_vars['disco'];
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['anio'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['discografica'];?>
</td>
            <td>
              <a class="glyphicon glyphicon-trash borrar-disco"href="index.php?action=borrar_disco&id_disco=<?php echo $_smarty_tpl->tpl_vars['disco']->value['id_disco'];?>
"></a>
              <a class="glyphicon glyphicon-edit mostrar-modificar-disco" href="index.php?action=mostrar_modificar_disco&id_disco=<?php echo $_smarty_tpl->tpl_vars['disco']->value['id_disco'];?>
&nombre=<?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
&anio=<?php echo $_smarty_tpl->tpl_vars['disco']->value['anio'];?>
&discografica=<?php echo $_smarty_tpl->tpl_vars['disco']->value['discografica'];?>
"></a>
            </td>
          </tr>
      <?php
$_smarty_tpl->tpl_vars['disco'] = $foreach_disco_Sav;
}
?>
      <?php } else { ?>
        <tr>
          <td colspan="4">
            <b>No hay Discos.</b>
          </td>
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