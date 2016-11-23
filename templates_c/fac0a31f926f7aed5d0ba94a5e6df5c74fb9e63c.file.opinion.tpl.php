<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 00:00:38
         compiled from ".\templates\opinion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1940158361f960101b7-49696630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac0a31f926f7aed5d0ba94a5e6df5c74fb9e63c' => 
    array (
      0 => '.\\templates\\opinion.tpl',
      1 => 1477392668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940158361f960101b7-49696630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58361f9602efe6_04321534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58361f9602efe6_04321534')) {function content_58361f9602efe6_04321534($_smarty_tpl) {?>
        <div class="panel-heading">
          <h3 class="panel-title">Ante cualquier duda, sugerencia u opinion, no dudes en escribirnos!</h3>
        </div>
        <div class="panel-body">
          <form id="form-opinion">
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