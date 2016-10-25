<?php

include_once 'Models/categoria_model.php';
class CategoriaController
{
  private $modelCategoria;
  function __construct()
  {
    $this->modelCategoria=new CategoriaModel();
  }
  function crearCategoria(){
      $this->modelCategoria->crearCategoria($_REQUEST['categoria']);
      $this->mostrarCrearCategoria();
  }
  function borrarCategoria(){
      $this->modelCategoria->borrarCategoria($_REQUEST['id_categoriaNoticia']);
      $this->mostrarCrearCategoria();
  }
  function modificarCategoria(){
      $this->modelCategoria->modificarCategoria($_REQUEST['id_categoriaNoticia'],$_REQUEST['categoria']);
  }
}
 ?>
