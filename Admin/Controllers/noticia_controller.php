<?php
include_once 'Models/noticia_model.php';
include_once 'Views/view.php';
/**
 *
 */
class NoticiaController
{
  private $modelNoticia;
  function __construct()
  {
    $this->modelNoticia=new NoticiaModel();
  }
  function cargarNoticia(){
      $this->modelNoticia->cargarNoticia($_REQUEST['titulo'],$_REQUEST['contenido'],$_REQUEST['categoria']);
      $this->view->mostrarCargarNoticia();
  }
  function borrarNoticia(){

      $this->modelNoticia->borrarNoticia($_REQUEST['id_noticia']);
      $this->mostrarCargarNoticia();
  }
  function modificarNoticia(){
      $this->modelNoticia->modificarNoticia($_REQUEST['id_noticia'],$_REQUEST['nombre'],$_REQUEST['contenido'],$_REQUEST['categoria']);
  }
}

 ?>
