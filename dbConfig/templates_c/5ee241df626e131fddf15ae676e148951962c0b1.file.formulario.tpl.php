<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 02:13:06
         compiled from ".\templates\formulario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2275858363ea25d7b92-35929211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee241df626e131fddf15ae676e148951962c0b1' => 
    array (
      0 => '.\\templates\\formulario.tpl',
      1 => 1479947545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2275858363ea25d7b92-35929211',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58363ea25f5303_41208156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58363ea25f5303_41208156')) {function content_58363ea25f5303_41208156($_smarty_tpl) {?><html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalación de la base de datos</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="blank  pace-done">
<div class="wrapper">
    <section class="content">
        <div class="container-center lg animated slideInDown">
            <div class="view-header">
                <div class="header-title">
                    <h3>Instalacion base de datos Cuarteto</h3>
                    <p>
                      Para continuar con la instalacion complete los datos del formulario.
                    </p>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form class="database" method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Email</label>
                                <input type="name" value="" class="form-control" name="email" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contraseña</label>
                                <input type="password" value=""class="form-control" name="pass" required>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Confirmar</button>
                        </div>
                    </form>
                    <div class="errors"> </div>
                </div>
            </div>
        </div>
        <div class="volver" hidden="true"><a href="../index.php">Volver al inicio.</a></div>
    </section>

</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>


</body>
</html>
<?php }} ?>