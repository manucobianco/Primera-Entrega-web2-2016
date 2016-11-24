<?php /* Smarty version 3.1.27, created on 2016-11-23 23:59:11
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\principal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:474058361f3f2f7696_14485117%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17503e5c27742e6b9e98df43fb5f04824e024e8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\principal.tpl',
      1 => 1479941153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474058361f3f2f7696_14485117',
  'variables' => 
  array (
    'opiniones' => 0,
    'opinion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58361f3f3303b0_40096998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58361f3f3303b0_40096998')) {
function content_58361f3f3303b0_40096998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '474058361f3f2f7696_14485117';
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