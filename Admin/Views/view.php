<?php
include_once 'libs/smarty/Smarty.class.php';

class View {
  private $smarty;
  private $errores;


function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}

function mostrarHome(){

  $this->smarty->display('index.tpl');
}
function mostrarAdmin($opiniones){
    $this->smarty->assign('opiniones',$opiniones);
  $this->smarty->display('admin.tpl');
}

function mostrarError($error){
  array_push($this->errores, $error);
}
function mostrarPrincipal($opiniones){
    $this->smarty->assign('opiniones',$opiniones);
  $this->smarty->display('principal.tpl');
}
function mostrarCargarNoticia($categorias,$noticias){
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->assign('noticias',$noticias);
  $this->smarty->display('cargarNoticia.tpl');
}
function mostrarCargarImagenes($imagenes){
  $this->smarty->assign('imagenes',$imagenes);
  $this->smarty->display('cargarImagenes.tpl');
}
function mostrarCrearCategoria($categorias){
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->display('crearCategoria.tpl');
}
function mostrarCargarDisco($discos){
  $this->smarty->assign('discos',$discos);
  $this->smarty->display('cargarDisco.tpl');
}
function mostrarModificarDisco($id_disco,$nombre,$anio,$discografica){
  $this->smarty->assign('id_disco',$id_disco);
  $this->smarty->assign('nombre',$nombre);
  $this->smarty->assign('anio',$anio);
  $this->smarty->assign('discografica',$discografica);
  $this->smarty->display('modificarDisco.tpl');
}
function mostrarModificarNoticia($id_noticia,$titulo,$contenido,$categorias){
  $this->smarty->assign('id_noticia',$id_noticia);
  $this->smarty->assign('titulo',$titulo);
  $this->smarty->assign('contenido',$contenido);
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->display('modificarNoticia.tpl');
}
function mostrarModificarCategoria($id_categoria,$categoria){
  $this->smarty->assign('id_categoria',$id_categoria);
  $this->smarty->assign('categoria',$categoria);
  $this->smarty->display('modificarCategoria.tpl');
}


}


?>
