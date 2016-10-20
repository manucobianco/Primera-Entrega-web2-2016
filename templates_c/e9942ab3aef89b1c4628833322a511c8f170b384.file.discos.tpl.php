<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 22:36:57
         compiled from "./templates/discos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4370662845807d969d19170-03652507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9942ab3aef89b1c4628833322a511c8f170b384' => 
    array (
      0 => './templates/discos.tpl',
      1 => 1443643796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4370662845807d969d19170-03652507',
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
  'unifunc' => 'content_5807d969d38640_98074825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5807d969d38640_98074825')) {function content_5807d969d38640_98074825($_smarty_tpl) {?>      <table class="table table-bordered">
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<?php }} ?>