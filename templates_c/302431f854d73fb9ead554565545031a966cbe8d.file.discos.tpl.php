<?php /* Smarty version Smarty-3.1.14, created on 2016-11-14 20:04:13
         compiled from ".\templates\discos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1837582a0aad088b16-37868382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '302431f854d73fb9ead554565545031a966cbe8d' => 
    array (
      0 => '.\\templates\\discos.tpl',
      1 => 1477392668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1837582a0aad088b16-37868382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discos' => 0,
    'disco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582a0aad0bfb61_17365363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a0aad0bfb61_17365363')) {function content_582a0aad0bfb61_17365363($_smarty_tpl) {?>      <table class="table table-bordered">
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