<?php
include_once 'Models/noticia_model.php';
include_once 'Models/imagen_noticia_model.php';
include_once 'Views/view.php';
/**
 *
 */
class NoticiaController
{
  private $modelNoticia;
  private $modelImagenNoticia;
  function __construct()
  {
    $this->modelNoticia=new NoticiaModel();
    $this->modelImagenNoticia= new ImagenNoticiaModel();
  }
  function cargarNoticia(){
      if (isset($_FILES['imagen'])){
        $this->modelNoticia->cargarNoticia($_REQUEST['inputTituloNoticia'],$_REQUEST['txtNoticia'],$_REQUEST['categoria'],$_FILES['imagen']);
      }else {
        $this->modelNoticia->cargarNoticia($_REQUEST['inputTituloNoticia'],$_REQUEST['txtNoticia'],$_REQUEST['categoria']);
      }
  }
  function borrarNoticia(){
      $this->modelNoticia->borrarNoticia($_REQUEST['id_noticia']);
      $this->modelImagenNoticia->borrarImagenById($_REQUEST['id_noticia']);
  }
  function modificarNoticia(){
    if (isset($_FILES['imagen'])){
      $this->modelNoticia->modificarNoticia($_REQUEST['id-noticia'],$_REQUEST['inputTituloNoticia'],$_REQUEST['txtNoticia'],$_REQUEST['categoria'],$_FILES['imagen']);
    }else {
      $this->modelNoticia->modificarNoticia($_REQUEST['id-noticia'],$_REQUEST['inputTituloNoticia'],$_REQUEST['txtNoticia'],$_REQUEST['categoria']);
    }
  }
}

 ?>
