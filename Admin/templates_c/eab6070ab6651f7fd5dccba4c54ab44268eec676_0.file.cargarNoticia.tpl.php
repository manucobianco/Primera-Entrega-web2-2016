<?php /* Smarty version 3.1.27, created on 2016-11-24 00:19:09
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\cargarNoticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4026583623ed98b746_54627648%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab6070ab6651f7fd5dccba4c54ab44268eec676' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\cargarNoticia.tpl',
      1 => 1479943144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4026583623ed98b746_54627648',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'noticias' => 0,
    'noticia' => 0,
    'hayNoticias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583623ed9e0118_35216676',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583623ed9e0118_35216676')) {
function content_583623ed9e0118_35216676 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4026583623ed98b746_54627648';
?>
<h1 class="page-header">Cargar Noticia</h1>
<form id="form-noticia" method="POST"enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputTituloNoticia">Titulo Noticia</label>
    <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" placeholder="Titulo de la Noticia" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia" placeholder="Contenido de la Noticia"required></textarea>
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
  <button type="submit" class="btn btn-default" id="btnCargarNoticia">Cargar Noticia</button>

</form>
<div class="messages panel"></div>

<h1 class="page-header">Noticias por Categoria</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['categorias']->value)) {?>
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
<div class="categoria" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
">
<h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</h1>
<table class="table table-bordered">
<thead>
    <th>
      Nombre
    </th>
    <th>
      Sub-Titulo
    </th>
    <th>
      Contenido
    </th>
    <th>
      Accion
    </th>
</thead>
<tbody id="tblBodyNoticia">
  <?php if (!empty($_smarty_tpl->tpl_vars['noticias']->value)) {?>
  <?php $_smarty_tpl->tpl_vars['hayNoticias'] = new Smarty_Variable(false, null, 0);?>
  <?php
$_from = $_smarty_tpl->tpl_vars['noticias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['noticia']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
$foreach_noticia_Sav = $_smarty_tpl->tpl_vars['noticia'];
?>
    <?php if ($_smarty_tpl->tpl_vars['noticia']->value['fk_id_categoriaNoticia'] == $_smarty_tpl->tpl_vars['categoria']->value['id_categoriaNoticia']) {?>
      <?php $_smarty_tpl->tpl_vars['hayNoticias'] = new Smarty_Variable(true, null, 0);?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['subTitulo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</td>
        <td>
          <a class="glyphicon glyphicon-trash borrar-noticia"href="index.php?action=borrar_noticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a>
          <a class="glyphicon glyphicon-edit mostrar-modificar-noticia" href="index.php?action=mostrar_modificar_noticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
&nombre=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
&subTitulo=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['subTitulo'];?>
&contenido=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
 "></a>
        </td>
        </tr>
    <?php }?>
  <?php
$_smarty_tpl->tpl_vars['noticia'] = $foreach_noticia_Sav;
}
?>
  <?php if ($_smarty_tpl->tpl_vars['hayNoticias']->value == false) {?>
  <tr>
    <td align="center"colspan="5">
      <b>No hay noticias en esta categoria.</b>
    </td>
  </tr>
  <?php }?>
  <?php } else { ?>
    <tr>
      <td align="center"colspan="3">
        <b>No hay Noticias.</b>
      </td>
    </tr>
  <?php }?>
</tbody>
</table>
<?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
<?php } else { ?>
<h1 class="page-header">No hay noticias.</h1>
<?php }?>
<?php echo '<script'; ?>
 type="text/javascript"src="js/upload.js"><?php echo '</script'; ?>
>
<?php }
}
?>