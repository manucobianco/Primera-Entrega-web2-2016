<?php /* Smarty version 3.1.27, created on 2016-11-24 00:31:05
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\modificarNoticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3691583626b9877f09_06798149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad65f9e4ce7724998e70faf1952c46bef95ad3fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\modificarNoticia.tpl',
      1 => 1479943855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3691583626b9877f09_06798149',
  'variables' => 
  array (
    'id_noticia' => 0,
    'titulo' => 0,
    'subTitulo' => 0,
    'contenido' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583626b98e9491_15182614',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583626b98e9491_15182614')) {
function content_583626b98e9491_15182614 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3691583626b9877f09_06798149';
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
      <form id="form-modificar-noticia"enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id-noticia" id="id-noticia"value="<?php echo $_smarty_tpl->tpl_vars['id_noticia']->value;?>
">
        <div class="form-group">
          <label for="inputTituloNoticia">Titulo Noticia</label>
          <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" value="<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
"placeholder="Titulo de la Noticia" required>
        </div>
        <div class="form-group">
          <label for="inputSubTituloNoticia">Sub-Titulo Noticia</label>
          <input type="text" class="form-control" id="inputSubTituloNoticia"name="inputSubTituloNoticia" value="<?php echo $_smarty_tpl->tpl_vars['subTitulo']->value;?>
"placeholder="Sub-Titulo de la Noticia" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia"placeholder="Contenido de la Noticia"required><?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>
</textarea>
        </div>
        <div class="form-group">
          <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
          <label for="inputFile">Cargar Imagenes</label>
          <input type="file" id="input-imagen"name="imagen[]" multiple="multiple">
          <p class="help-block">tipos de imagen admitidas: .gif .png .jpg .jpeg</p>
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
        <h1 class="page-header">Imagenes</h1>
        <table class="table table-bordered">
          <thead>
            <th>Imagen</th>
            <th>Accion</th>
          </thead>
          <tbody id="tablaImagenes">
            <?php if (count($_smarty_tpl->tpl_vars['imagenes']->value) > 0) {?>
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
              <td><img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
"/></td>
              <td><a class="glyphicon glyphicon-trash borrar-imagen-noticia"href="index.php?action=borrar_imagen_noticia&id_imagendenoticia=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagendenoticia'];?>
"></a>
              </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
            <?php } else { ?>
            <tr>
              <td colspan="2">No hay imagenes.</td>
            </tr>
            <?php }?>
          </tbody>
        </table>
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