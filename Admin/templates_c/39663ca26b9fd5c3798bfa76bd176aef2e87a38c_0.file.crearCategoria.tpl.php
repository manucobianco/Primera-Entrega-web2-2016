<?php /* Smarty version 3.1.27, created on 2016-10-20 03:07:53
         compiled from "D:\xampp\htdocs\PrimeraEntrega2016\Admin\templates\crearCategoria.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15089580818e90a1a07_11971307%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39663ca26b9fd5c3798bfa76bd176aef2e87a38c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PrimeraEntrega2016\\Admin\\templates\\crearCategoria.tpl',
      1 => 1476925646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15089580818e90a1a07_11971307',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_580818e91da253_43929878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580818e91da253_43929878')) {
function content_580818e91da253_43929878 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15089580818e90a1a07_11971307';
?>
  <h1 class="page-header">Crear Categoria</h1>
  <form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputNombreCategoria">Nombre de la Categoria</label>
      <input type="text" class="form-control" id="inputNombreCategoria" name="inputNombreCategoria" placeholder="ingrese el nombre de la categoria" required>
    </div>
    <button type="submit" class="btn btn-default" id="btnCrearCategoria">Crear Categoria</button>
  </form>
  <h1 class="page-header">Categorias</h1>
    <table class="table table-bordered">
        <thead>
            <th>
              Nombre
            </th>
            <th>
              Acciones
            </th>
        </thead>
        <tbody id="tblBodyCategorias">
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
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</td>
                <td>
                  <a class="glyphicon glyphicon-trash borrar-categoria" href="index.php?action=borrar_categoria&id_categoriaNoticia=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoriaNoticia'];?>
"></a>
                  <a class="glyphicon glyphicon-edit mostrar-modificar-categoria" href="index.php?action=mostrar_modificar_categoria&id_categoriaNoticia=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoriaNoticia'];?>
&categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"></a>
                </td>
              </tr>
          <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
          <?php } else { ?>
            <tr>
              <td colspan="2"><b>No hay Categorias.<b/></td>
            </tr>
          <?php }?>
        </tbody>
      </table>

  <?php echo '<script'; ?>
 src="js/upload.js"><?php echo '</script'; ?>
>
<?php }
}
?>