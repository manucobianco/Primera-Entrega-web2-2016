<?php
include_once 'libs/Smarty.class.php';

class PaginaView {
  private $smarty;
  private $errores;


function __construct(){
  $this->smarty = new Smarty();

}

function mostrarHome(){
  $this->smarty->display('index.tpl');
}
function mostrarPrincipal(){
  $this->smarty->display('principal.tpl');
}
function mostrarIntegrantes(){
  $this->smarty->display('integrantes.tpl');
}
function mostrarDiscos($discos){
  $this->smarty->assign ('discos', $discos);
  $this->smarty->display('discos.tpl');
}
function mostrarNoticias($categorias,$noticias){
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->assign('noticias',$noticias);
  $this->smarty->display('noticias.tpl');
}
function mostrarPaginaOpinion(){
  $this->smarty->display('opinion.tpl');
}

function mostrarNoticia($noticia){
  $this->smarty->assign('noticia',$noticia);
  $this->smarty->display('noticia.tpl');
}
//
// function mostrarCategoria($id){
//   $this->smarty->display(id+'.tpl');
// }
function mostrarComentarios($comentarios,$emailSession){
    $this->smarty->assign('emailSession',$emailSession);
    $this->smarty->assign('comentarios',$comentarios);
    $this->smarty->display('comentarios.tpl');
}

}


?>
