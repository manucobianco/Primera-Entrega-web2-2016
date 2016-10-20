<?php /* Smarty version 3.1.27, created on 2016-10-20 03:07:57
         compiled from "D:\xampp\htdocs\PrimeraEntrega2016\Admin\templates\modificarCategoria.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14038580818ed0778c4_17208750%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5db0acfc5ddcd8d5968b316e9c01cd587d61e877' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PrimeraEntrega2016\\Admin\\templates\\modificarCategoria.tpl',
      1 => 1476891352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14038580818ed0778c4_17208750',
  'variables' => 
  array (
    'id_categoria' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_580818ed181301_61608080',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580818ed181301_61608080')) {
function content_580818ed181301_61608080 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14038580818ed0778c4_17208750';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Categoria</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" id="wrap">
      <h1 class="page-header">Modificar categoria</h1>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" id="id-categoria"name="id-categoria" value="<?php echo $_smarty_tpl->tpl_vars['id_categoria']->value;?>
">
          <label for="inputNombreCategoria">Nombre de la Categoria</label>
          <input type="text" class="form-control" id="inputNombreCategoria" name="inputNombreCategoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
"placeholder="ingrese el nombre de la categoria" required>
        </div>
        <button type="submit" class="btn btn-default" id="btnModificarCategoria">Modificar Categoria</button>
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