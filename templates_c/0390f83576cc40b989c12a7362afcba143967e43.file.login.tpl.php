<?php /* Smarty version Smarty-3.1.14, created on 2016-11-14 21:25:12
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30473582a1da891b7c3-09733330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479009568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30473582a1da891b7c3-09733330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_582a1da8961953_87715048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a1da8961953_87715048')) {function content_582a1da8961953_87715048($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../../favicon.ico">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/login.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="index.php?action=validar_login">
        <h2 class="form-signin-heading">Acceso</h2>
        <label for="txtEmail" class="sr-only">Email</label>
        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="txtPassword" class="sr-only">Password</label>
        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
        <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
          <div class="alert alert-danger" role="alert">
            <strong>No se pudo acceder!</strong>
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
              <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <?php } ?>
          </div>
        <?php }?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php }} ?>