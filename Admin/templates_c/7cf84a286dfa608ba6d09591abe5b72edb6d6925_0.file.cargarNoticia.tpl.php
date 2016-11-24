<?php /* Smarty version 3.1.27, created on 2016-10-25 02:31:34
         compiled from "D:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\cargarNoticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30631580ea7e6399251_09316420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf84a286dfa608ba6d09591abe5b72edb6d6925' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\cargarNoticia.tpl',
      1 => 1477354188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30631580ea7e6399251_09316420',
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
  'unifunc' => 'content_580ea7e6664076_73141659',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580ea7e6664076_73141659')) {
function content_580ea7e6664076_73141659 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30631580ea7e6399251_09316420';
?>
    <h1 class="page-header">Cargar Noticia</h1>
    <form action="#" method="GET"enctype="multipart/form-data">
      <div class="form-group">
        <label for="inputTituloNoticia">Titulo Noticia</label>
        <input type="text" class="form-control" id="inputTituloNoticia"name="inputTituloNoticia" placeholder="Titulo de la Noticia" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="3" id="txtNoticia"name="txtNoticia" placeholder="Contenido de la Noticia"required></textarea>
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
            <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</td>
            <td>
              <a class="glyphicon glyphicon-trash borrar-noticia"href="index.php?action=borrar_noticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a>
              <a class="glyphicon glyphicon-edit mostrar-modificar-noticia" href="index.php?action=mostrar_modificar_noticia&id_noticia=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
&nombre=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
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
        <td align="center"colspan="3">
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