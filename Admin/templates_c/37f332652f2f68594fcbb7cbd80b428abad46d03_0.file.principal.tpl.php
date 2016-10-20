<?php /* Smarty version 3.1.27, created on 2016-10-20 02:56:45
         compiled from "D:\xampp\htdocs\PrimeraEntrega2016\Admin\templates\principal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142525808164db91c21_70240313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f332652f2f68594fcbb7cbd80b428abad46d03' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PrimeraEntrega2016\\Admin\\templates\\principal.tpl',
      1 => 1476818834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142525808164db91c21_70240313',
  'variables' => 
  array (
    'opiniones' => 0,
    'opinion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5808164dd08c78_11178738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5808164dd08c78_11178738')) {
function content_5808164dd08c78_11178738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142525808164db91c21_70240313';
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
          <td><a class="glyphicon glyphicon-trash borrar-opinion" href="admin.php?action=borrar_opinion&id_opinion=<?php echo $_smarty_tpl->tpl_vars['opinion']->value['id_opinionUsuario'];?>
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

</div>
<?php }
}
?>