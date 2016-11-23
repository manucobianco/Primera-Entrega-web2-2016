<?php /* Smarty version 3.1.27, created on 2016-11-21 00:55:49
         compiled from "D:\xampp\htdocs\Primera-Entrega-web2-2016\Admin\templates\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22856583238051012b8_06425112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4688b0f3086d319d3fc1d30d5d027de2d98e3b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\admin.tpl',
      1 => 1477354188,
      2 => 'file',
    ),
    '4a166b95e4a6f6f1a38aca25d57d70de35a34c0a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Primera-Entrega-web2-2016\\Admin\\templates\\base.tpl',
      1 => 1479678878,
      2 => 'file',
    ),
    'd62ed2594a51c05bd217f84de060c38ae72c35df' => 
    array (
      0 => 'd62ed2594a51c05bd217f84de060c38ae72c35df',
      1 => 0,
      2 => 'string',
    ),
    '5b01b58adff82db0d5420c185dc84730b1b6aa69' => 
    array (
      0 => '5b01b58adff82db0d5420c185dc84730b1b6aa69',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '22856583238051012b8_06425112',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5832380573b028_84754582',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5832380573b028_84754582')) {
function content_5832380573b028_84754582 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22856583238051012b8_06425112';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administracion-<?php
$_smarty_tpl->properties['nocache_hash'] = '22856583238051012b8_06425112';
?>
 Principal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <img src="images/rataBlanca.png"/>
    </div>
    
    <div class="container" id="wrap">
      <ul class="nav nav-pills">
        <li role="presentation" class="active"id="home"><a class="home" href="#">Administrar Opiniones</a></li>
        <li role="presentation"id="cargarImagenes"><a class="cargar-imagenes" href="#">Administrar Imagenes</a></li>
        <li role="presentation" id="cargarNoticias"><a class="cargar-noticia" href="#">Administrar Noticias</a></li>
        <li role="presentation"id="crearCategoria"><a class="crear-categoria" href="#">Administrar Categorias</a></li>
        <li role="presentation"id="cargarDisco"><a class="cargar-disco" href="#">Administrar Discos</a></li>
        <li role="presentation"id="cargarUsuario"><a class="cargar-usuario" href="#">Administrar Usuarios</a></li>
      </ul>
      <div id="contenido">
        <h1 class="page-header">Pagina de Administracion</h1>
        <?php
$_smarty_tpl->properties['nocache_hash'] = '22856583238051012b8_06425112';
?>

<table class="table table-bordered">
  <thead>
      <th>
        Nombre
      </th>
      <th>
        Email
      </th>
      <th>
        Opinion
      </th>
      <th>
        Acciones
      </th>
  </thead>
  <tbody id="tblBodyOpinion">
    <?php if (!empty($_smarty_tpl->tpl_vars['opiniones']->value)) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['opiniones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['opinion'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['opinion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['opinion']->value) {
$_smarty_tpl->tpl_vars['opinion']->_loop = true;
$foreach_opinion_Sav = $_smarty_tpl->tpl_vars['opinion'];
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['email'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['opinion']->value['opinion'];?>
</td>
          <td><a class="glyphicon glyphicon-trash borrar-opinion" href="index.php?action=borrar_opinion&id_opinion=<?php echo $_smarty_tpl->tpl_vars['opinion']->value['id_opinionUsuario'];?>
"></a></td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['opinion'] = $foreach_opinion_Sav;
}
?>
    <?php } else { ?>
      <tr>
        <td align="center" colspan="4"><b>No hay opiniones.<b/></td>
      </tr>
    <?php }?>
  </tbody>
  </table>

      </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>