<?php /* Smarty version 3.1.27, created on 2016-11-24 01:25:37
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\imagenesNoticia.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2959583633818ccb93_19067813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055c66a5a34c153cdf17b0750584c1750692626a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\imagenesNoticia.tpl',
      1 => 1479941104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959583633818ccb93_19067813',
  'variables' => 
  array (
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58363381901589_99694051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58363381901589_99694051')) {
function content_58363381901589_99694051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2959583633818ccb93_19067813';
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
  <td><a class="glyphicon glyphicon-trash borrar-item-imagen"href="index.php?action=borrar_imagen_noticia&id_imagen=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagendenoticia'];?>
"></a>
  </td>
</tr>
<?php ob_start();
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
$_tmp1=ob_get_clean();
echo $_tmp1;?>

<?php }
}
?>