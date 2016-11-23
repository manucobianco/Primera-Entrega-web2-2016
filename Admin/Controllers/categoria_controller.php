<?php

include_once 'Models/categoria_model.php';
include_once 'Models/noticia_model.php';

class CategoriaController
{
  private $modelCategoria;
  private $modelNoticia;
  function __construct()
  {
    $this->modelCategoria=new CategoriaModel();
    $this->modelNoticia=new NoticiaModel();
  }
  function crearCategoria(){
      $this->modelCategoria->crearCategoria($_REQUEST['categoria']);
      $this->mostrarCrearCategoria();
  }
  function borrarCategoria(){
      $this->modelCategoria->borrarCategoria($_REQUEST['id_categoriaNoticia']);
      $this->modelNoticia->borrarNoticiaById($_REQUEST['id_categoriaNoticia']);
  }
  function modificarCategoria(){
      $this->modelCategoria->modificarCategoria($_REQUEST['id_categoriaNoticia'],$_REQUEST['categoria']);
  }
}
 ?>
