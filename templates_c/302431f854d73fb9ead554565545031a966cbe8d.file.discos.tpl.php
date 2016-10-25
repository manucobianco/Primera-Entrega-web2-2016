<?php /* Smarty version Smarty-3.1.14, created on 2016-10-25 02:25:17
         compiled from ".\templates\discos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7465580ea5301aa379-56470770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '302431f854d73fb9ead554565545031a966cbe8d' => 
    array (
      0 => '.\\templates\\discos.tpl',
      1 => 1477354930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7465580ea5301aa379-56470770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580ea53042ec85_59696515',
  'variables' => 
  array (
    'discos' => 0,
    'disco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ea53042ec85_59696515')) {function content_580ea53042ec85_59696515($_smarty_tpl) {?>      <table class="table table-bordered">
        <thead>
            <th>
              Nombre
            </th>
            <th>
              A&ntilde;o
            </th>
            <th>
              Discografica
            </th>
        </thead>
        <tbody id="tblBodyDiscos">
          <?php  $_smarty_tpl->tpl_vars['disco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['disco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->key => $_smarty_tpl->tpl_vars['disco']->value){
$_smarty_tpl->tpl_vars['disco']->_loop = true;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['anio'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['disco']->value['discografica'];?>
</td>
              </tr>
          <?php } ?>
        </tbody>
        </table>

        </div>
      </div>
    </div>
<?php }} ?>