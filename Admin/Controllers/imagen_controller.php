<?php
include_once 'Models/imagen_model.php';
class ImagenController
{
  private $modelImagen;
  function __construct()
  {
    $this->modelImagen=new ImagenModel();
  }
  function cargarImagen(){
    if(isset($_FILES['imagen'])&&isset($_REQUEST['descripcion'])){
      $this->modelImagen->cargarImagen($_FILES['imagen'],$_REQUEST['descripcion']);
    }
  }
  function borrarImagen(){
      $this->modelImagen->borrarImagen($_REQUEST['id_imagen']);
      $this->mostrarCargarImagenes();
  }
}
 ?>
