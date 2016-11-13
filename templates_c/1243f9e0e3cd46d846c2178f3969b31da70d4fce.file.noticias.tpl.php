<?php /* Smarty version Smarty-3.1.14, created on 2016-11-12 23:33:26
         compiled from ".\templates\noticias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6318580ea53414d5a5-09226405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1243f9e0e3cd46d846c2178f3969b31da70d4fce' => 
    array (
      0 => '.\\templates\\noticias.tpl',
      1 => 1478989988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6318580ea53414d5a5-09226405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580ea5344106d9_24638091',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'noticias' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ea5344106d9_24638091')) {function content_580ea5344106d9_24638091($_smarty_tpl) {?><div class="container">
  <div class="col-xs-12 col-sm-9">
    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
      <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-8">
              <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Indice</button>
              </p>
            <div class="noticiaTitulo" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
">
              <h1><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</h1>
            </div>
            <div class="row">
            <?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value){
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['noticia']->value['fk_id_categoriaNoticia']==$_smarty_tpl->tpl_vars['categoria']->value['id_categoriaNoticia']){?>

                <div class="col-xs-12 col-lg-6" id="noticiaIndividual">
                  <h2><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
</h2>
                  <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</p>
                  <img src="images/imagen-no-disponible.jpg" alt="Imagen No Disponible" />
                  <p><a>Mas Detalles»</a></p>
              </div><!--/.col-xs-6.col-lg-4-->

                <?php }?>
            <?php } ?>
              </div><!--/row-->
            </div><!--/row-->
          </div><!--/class="row row-offcanvas row-offcanvas-right"-->
        </div><!--/container-->
      <?php } ?>
    </div>
  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
         <div class="list-group">
           <a class="list-group-item active">Indice</a>
           <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
            <a href="index.php?action=trater_noticias_especificas&id_categoria=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoriaNoticia'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a>
           <?php } ?>
         </div>
  </div><!--/.sidebar-offcanvas-->
 </div>
</div>
<?php }} ?>