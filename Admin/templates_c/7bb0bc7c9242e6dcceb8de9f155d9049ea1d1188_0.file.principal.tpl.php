<?php /* Smarty version 3.1.27, created on 2016-10-25 02:18:52
         compiled from "D:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\principal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3652580ea4ec9dc6c3_61138118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb0bc7c9242e6dcceb8de9f155d9049ea1d1188' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\principal.tpl',
      1 => 1477354188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3652580ea4ec9dc6c3_61138118',
  'variables' => 
  array (
    'opiniones' => 0,
    'opinion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_580ea4ecbf39c4_98036312',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_580ea4ecbf39c4_98036312')) {
function content_580ea4ecbf39c4_98036312 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3652580ea4ec9dc6c3_61138118';
?>
<h1 class="page-header">Pagina de Administracion</h1>
<div class=container>
  <table class="table table-bordered">
    <thead>
        <th>
          Nombre
        </th>
        <th>
          Email
        </th>
        <th>
          Opinion
        </th>
        <th>
          Acciones
        </th>
    </thead>
    <tbody id="tblBodyOpinion"><?php if (!empty($_smarty_tpl->tpl_vars['opiniones']->value)) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['opiniones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['opinion'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['opinion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['opinion']->value) {
$_smarty_tpl->tpl_vars['opinion']->_loop = true;
$foreach_opinion_Sav = $_smarty_tpl->tpl_vars['opinion'];
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['email'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['opinion'];?>
</td>
          <td><a class="glyphicon glyphicon-trash borrar-opinion" href="index.php?action=borrar_opinion&id_opinion=<?php echo $_smarty_tpl->tpl_vars['opinion']->value['id_opinionUsuario'];?>
"></a></td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['opinion'] = $foreach_opinion_Sav;
}
?>
    <?php } else { ?>
      <tr>
        <td align="center"colspan="4"><b>No hay opiniones.<b/></td>
      </tr>
    <?php }?>
    </tbody>
    </table>
    <?php echo '<script'; ?>
 src="js/upload.js" charset="utf-8"><?php echo '</script'; ?>
>

</div>
<?php }
}
?>