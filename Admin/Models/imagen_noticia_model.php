<?php
require_once'model.php';
class ImagenNoticiaModel extends Model{
  function getImagenesById($id){
    $consulta=$this->db->prepare("SELECT * FROM imagendenoticia WHERE fk_id_noticia=?");
    $consulta->execute(array($id));
    return $consulta->fetchAll();
  }
  function borrarImagen($id){
    $consulta=$this->db->prepare("SELECT * FROM imagendenoticia WHERE id_imagendenoticia=?");
    $consulta->execute(array($id));
    $imagen= $consulta->fetch();
    unlink($imagen['path']);
    $consulta=$this->db->prepare("DELETE FROM imagendenoticia WHERE id_imagendenoticia=?");
    $consulta->execute(array($id));
  }
  function borrarImagenById($fk_id_noticia){
    $consulta=$this->db->prepare("SELECT * FROM imagendenoticia WHERE fk_id_noticia=?");
    $consulta->execute(array($fk_id_noticia));
    $imagenes= $consulta->fetchAll();
    foreach ($imagenes as $imagen) {
      unlink($imagen['path']);
      $consulta=$this->db->prepare("DELETE FROM imagendenoticia WHERE id_imagendenoticia=?");
      $consulta->execute(array($imagen['id_imagendenoticia']));
    }
  }
}
?>
