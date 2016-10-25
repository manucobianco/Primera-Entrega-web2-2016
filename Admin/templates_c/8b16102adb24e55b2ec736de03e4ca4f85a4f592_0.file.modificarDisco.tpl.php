<?php /* Smarty version 3.1.27, created on 2016-10-25 02:31:51
         compiled from "D:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\modificarDisco.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25842580ea7f7d78862_38691444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b16102adb24e55b2ec736de03e4ca4f85a4f592' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\modificarDisco.tpl',
      1 => 1477354188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25842580ea7f7d78862_38691444',
  'variables' => 
  array (
    'id_disco' => 0,
    'nombre' => 0,
    'anio' => 0,
    'discografica' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_580ea7f7f03140_31185943',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580ea7f7f03140_31185943')) {
function content_580ea7f7f03140_31185943 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25842580ea7f7d78862_38691444';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Disco</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" id="wrap">
      <h1 class="page-header">Modificar Disco</h1>
      <form action="#"enctype="multipart/form-data" method="REQUEST">
        <input type="hidden" name="id_disco" id="id-disco"value="<?php echo $_smarty_tpl->tpl_vars['id_disco']->value;?>
">
        <div class="form-group">
          <label for="inputTituloNoticia">Nombre del disco</label>
          <input type="text" class="form-control" id="inputNombreDisco"name="inputNombreDisco" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"placeholder="Nombre del disco..." required>
        </div>
        <div class="form-group">
          <label for="inputAnio">Año</label>
          <input type="text" class="form-control" id="inputAnio"name="inputAnio" value="<?php echo $_smarty_tpl->tpl_vars['anio']->value;?>
"placeholder="Año del disco..." required>
        </div>
        <div class="form-group">
          <label for="inputDiscografica">Discografica</label>
          <input type="text" class="form-control" id="inputDiscografica"name="inputDiscografica"value="<?php echo $_smarty_tpl->tpl_vars['discografica']->value;?>
" placeholder="Nombre de la Discografica..." required>
        </div>
        <button type="submit" class="btn btn-default" id="btnModificarDisco">Modificar Disco</button>
      </form>

    </div>
    <?php echo '<script'; ?>
 src="js/jquery-2.1.4.min.js" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/upload.js" charset="utf-8"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>