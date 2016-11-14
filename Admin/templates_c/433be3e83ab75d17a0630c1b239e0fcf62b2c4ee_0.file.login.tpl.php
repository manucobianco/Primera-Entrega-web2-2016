<?php /* Smarty version 3.1.27, created on 2016-11-14 21:21:17
         compiled from "C:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18399582a1cbd26a297_93419488%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433be3e83ab75d17a0630c1b239e0fcf62b2c4ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\login.tpl',
      1 => 1479154873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18399582a1cbd26a297_93419488',
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582a1cbd2a3928_80737894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582a1cbd2a3928_80737894')) {
function content_582a1cbd2a3928_80737894 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18399582a1cbd26a297_93419488';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../../favicon.ico">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/login.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="../../assets/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="index.php?action=validar_login">
        <h2 class="form-signin-heading">Acceso</h2>
        <label for="txtEmail" class="sr-only">Email</label>
        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="txtPassword" class="sr-only">Password</label>
        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
        <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
          <div class="alert alert-danger" role="alert">
            <strong>No se pudo acceder!</strong>
            <?php
$_from = $_smarty_tpl->tpl_vars['errores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
              <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
          </div>
        <?php }?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>