<?php /* Smarty version 3.1.27, created on 2016-11-12 23:48:14
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016-master\Admin\templates\cargarImagenes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1896058279c2ee38f69_30512109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3452294ebb9275148627e231c98f1af9adb76ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016-master\\Admin\\templates\\cargarImagenes.tpl',
      1 => 1477392668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1896058279c2ee38f69_30512109',
  'variables' => 
  array (
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58279c2ee80190_66541182',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58279c2ee80190_66541182')) {
function content_58279c2ee80190_66541182 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1896058279c2ee38f69_30512109';
?>
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
            <?php if (!empty($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['imagenes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['imagen']->value['nombre'];?>
</td>
                  <td><img alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['nombre'];?>
"src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
"></td>
                  <td><a class="glyphicon glyphicon-trash borrar-imagen" href="index.php?action=borrar_imagen&id_imagen=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
"></a></td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
            <?php } else { ?>
              <tr>
                <td colspan="3"><b>No hay imagenes.<b/></td>
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