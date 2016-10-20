<?php /* Smarty version Smarty-3.1.14, created on 2016-10-20 02:11:02
         compiled from "./templates/opinion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91916307758080b963ca960-79141383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3e17ef36de22678a671a36bb0f5c8d1bdb7e2bf' => 
    array (
      0 => './templates/opinion.tpl',
      1 => 1443688216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91916307758080b963ca960-79141383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58080b963ed6e5_98569194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58080b963ed6e5_98569194')) {function content_58080b963ed6e5_98569194($_smarty_tpl) {?>
        <div class="panel-heading">
          <h3 class="panel-title">Ante cualquier duda, sugerencia u opinion, no dudes en escribirnos!</h3>
        </div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="name" placeholder="Ingrese el Nombre">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su email">
            </div>
            <textarea class="form-control" name="texto" rows="8"id="txtOpinion"></textarea>
            <button type="submit" class="btn btn-default"id="btnEnviarOpinion">Enviar</button>
          </form>
        </div>
      </div>
    <script src="js/upload.js"></script>
<?php }} ?>