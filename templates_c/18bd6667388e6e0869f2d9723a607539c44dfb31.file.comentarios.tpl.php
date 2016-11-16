<?php /* Smarty version Smarty-3.1.14, created on 2016-11-16 09:00:29
         compiled from ".\templates\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214915828dedb560668-56538384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18bd6667388e6e0869f2d9723a607539c44dfb31' => 
    array (
      0 => '.\\templates\\comentarios.tpl',
      1 => 1479163100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214915828dedb560668-56538384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5828dedb588a12_81623991',
  'variables' => 
  array (
    'emailSession' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5828dedb588a12_81623991')) {function content_5828dedb588a12_81623991($_smarty_tpl) {?><div class="panel-heading">
  <?php if ($_smarty_tpl->tpl_vars['emailSession']->value){?>
    <h3 class="panel-title">Dejanos tu comentario</h3>
        </div>
        <div class="panel-body row">
          <div class=" col-md-6 col-md-offset-3">
            <form id="form-comentario">
              <textarea class="form-control" name="texto" rows="8"id="txtComentario"></textarea>
              <button type="submit" class="btn btn-default"id="btnEnviarComentario">Enviar</button>
            </form>
          </div>
        </div>
        <?php }?>
        <div class="list-group">
            <ul id="listaComentarios">
              <!-- <li class="list-group-item active">Comentarios</li>
              <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>
</li>
              <?php } ?> -->
            </ul>
        </div>
    <script src="js/upload.js"></script>
<?php }} ?>