<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 20:24:08
         compiled from ".\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122525835ecd82a8084-63754915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9489e0e0cf9cf9b13f913ba886d8ccac28fd30' => 
    array (
      0 => '.\\templates\\register.tpl',
      1 => 1479052746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122525835ecd82a8084-63754915',
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
  'unifunc' => 'content_5835ecd85957c1_52089436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835ecd85957c1_52089436')) {function content_5835ecd85957c1_52089436($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../../favicon.ico">
    <title>Registrate</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/login.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="index.php?action=validar_registro">
        <h2 class="form-signin-heading">Registrate</h2>
        <label for="txtEmail" class="sr-only">Email</label>
        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="txtPassword1" class="sr-only">Password</label>
        <input type="password" id="txtPassword1" name="txtPassword1" class="form-control" placeholder="Password" required>
        <label for="txtPassword2" class="sr-only">Confirm Password</label>
        <input type="password" id="txtPassword2" name="txtPassword2" class="form-control" placeholder="Password" required>
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