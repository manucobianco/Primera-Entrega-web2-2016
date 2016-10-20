<?php /* Smarty version 3.1.27, created on 2016-10-20 03:08:28
         compiled from "D:\xampp\htdocs\PrimeraEntrega2016\Admin\templates\modificarDisco.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157035808190c174953_16289050%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9d5e5a49cdab8e60dae65ab54bbbe1cbd4b2d3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PrimeraEntrega2016\\Admin\\templates\\modificarDisco.tpl',
      1 => 1476893196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157035808190c174953_16289050',
  'variables' => 
  array (
    'id_disco' => 0,
    'nombre' => 0,
    'anio' => 0,
    'discografica' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5808190c291c18_92514813',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5808190c291c18_92514813')) {
function content_5808190c291c18_92514813 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157035808190c174953_16289050';
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