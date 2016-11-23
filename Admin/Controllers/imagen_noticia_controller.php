<?php
include_once 'Models/imagen_noticia_model.php';
class ImagenNoticiaController
{
  private $modelImagenNoticia;
  function __construct()
  {
    $this->modelImagenNoticia=new ImagenNoticiaModel();
  }
  function borrarImagenNoticia(){
    if (isset($_REQUEST['id_imagendenoticia'])) {
      return  $this->modelImagenNoticia->borrarImagen($_REQUEST['id_imagendenoticia']);
    }else {
      return print("No se puede borrar la imagen porque falta algun parametro.");
    }
  }
  function getImagenesById(){
    $this->modelImagenNoticia->getImagenesById($_REQUEST['fk_id_noticia']);
  }
}
 ?>
