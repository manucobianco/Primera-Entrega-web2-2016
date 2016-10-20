<?php /* Smarty version 3.1.27, created on 2016-10-20 03:06:00
         compiled from "D:\xampp\htdocs\PrimeraEntrega2016\Admin\templates\modificarNoticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1957358081878382243_36541406%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa9a73f9d5079ff57c62abe82f3ca72ccd068d5d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PrimeraEntrega2016\\Admin\\templates\\modificarNoticia.tpl',
      1 => 1476901918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957358081878382243_36541406',
  'variables' => 
  array (
    'id_noticia' => 0,
    'titulo' => 0,
    'contenido' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_580818785186a4_37786392',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580818785186a4_37786392')) {
function content_580818785186a4_37786392 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1957358081878382243_36541406';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Noticia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" id="wrap">
      <h1 class="page-header">Modificar Noticia</h1>
      <form action="#"enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id-noticia" id="id-noticia"value="<?php echo $_smarty_tpl->tpl_vars['id_noticia']->value;?>
">
        <div class="form-group">
          <label for="inputTituloNoticia">Titulo Noticia</label>
          <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" value="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
"placeholder="Titulo de la Noticia" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia"placeholder="Contenido de la Noticia"required><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</textarea>
        </div>
        <label for="categoria">Categoria</label>
        <select class="form-control" id="categoria"name="categoria">
          <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoriaNoticia'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</option>
          <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
        </select>
        <button type="submit" class="btn btn-default" id="btnModificarNoticia">Modificar Noticia</button>

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