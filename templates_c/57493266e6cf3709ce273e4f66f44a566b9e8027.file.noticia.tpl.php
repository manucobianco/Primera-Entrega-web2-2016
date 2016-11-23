<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 20:31:43
         compiled from ".\templates\noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322065834d3b036d8d7-77931075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57493266e6cf3709ce273e4f66f44a566b9e8027' => 
    array (
      0 => '.\\templates\\noticia.tpl',
      1 => 1479929477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322065834d3b036d8d7-77931075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5834d3b039fe19_78261373',
  'variables' => 
  array (
    'noticia' => 0,
    'emailSession' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834d3b039fe19_78261373')) {function content_5834d3b039fe19_78261373($_smarty_tpl) {?><div id="noticia" class="container">

      <div class="blog-header">

        <h1 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
</h1>
        <p class="lead blog-description"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['subTitulo'];?>
</p>

      </div>

          <div class="blog-post">
            <blockquote>
              <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</p>
            </blockquote>
          </div>
          <div class="panel-heading">
            <?php if ($_smarty_tpl->tpl_vars['emailSession']->value){?>
              <h3 class="panel-title">Dejanos tu comentario</h3>
                  </div>
                  <div class="panel-body row">
                    <div class=" col-md-6 col-md-offset-3">
                      <form id="form-comentario">
                        <textarea class="form-control" name="texto" rows="8"id="txtComentario"></textarea>
                        <div class="btnEnviarConEstrellas">
                            <button type="submit" class="btn btn-default" id="btnEnviarComentario" numeroNoticia="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
">Enviar</button>

                            <p id="estellas" class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                              <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>
                        </div>
                      </form>
                    </div>
                  </div>
              <?php }?>
                  <div class="list-group">
                      <table id="tablaComentarios"  class="table table-striped">
                        <!-- <li class="list-group-item active">Comentarios</li>
                        <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
                          <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>
</li>
                        <?php } ?> -->
                      </table>
                  </div>
              <script src="js/upload.js"></script>

          <nav>
            <ul class="pager">
              <li><a href="" class="volverANoticias"><< Volver</a></li>

            </ul>
          </nav>

    </div>
  </div>
<?php }} ?>