<?php /* Smarty version Smarty-3.1.14, created on 2016-10-16 23:37:01
         compiled from ".\templates\opinion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44555803f2fd55a315-90520103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac0a31f926f7aed5d0ba94a5e6df5c74fb9e63c' => 
    array (
      0 => '.\\templates\\opinion.tpl',
      1 => 1443688216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44555803f2fd55a315-90520103',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5803f2fd611cc1_08313573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5803f2fd611cc1_08313573')) {function content_5803f2fd611cc1_08313573($_smarty_tpl) {?>
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