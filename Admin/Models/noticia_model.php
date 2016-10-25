<?php
require_once'model.php';
class NoticiaModel extends Model{

  function getNoticias(){
    $consulta = $this->db->prepare("SELECT * FROM noticia");
    $consulta->execute();
    return $consulta->fetchAll();
  }
  function getNoticiaById($id){
    $consulta=$this->db->prepare('SELECT * FROM noticia WHERE id_noticia=?');
    $consulta->execute(array($id));
    $noticia=$consulta->fetchAll();
    return $noticia;
  }
  function cargarNoticia($nombre,$contenido,$idCategoria){
    $consulta = $this->db->prepare('INSERT INTO noticia(nombre,contenido,fk_id_categoriaNoticia) VALUES(:nombre,:contenido,:categoria)');
    $consulta->execute(array(':nombre'=>$nombre,':contenido'=>$contenido,':categoria'=>$idCategoria));
  }
  function borrarNoticia($id_noticia){
    $consulta = $this->db->prepare('DELETE FROM noticia WHERE id_noticia=?');
    $consulta->execute(array($id_noticia));
  }
  function modificarNoticia($id,$nombre,$contenido,$idCategoria){
    $consulta = $this->db->prepare('UPDATE noticia SET nombre = ?, contenido = ?, fk_id_categoriaNoticia = ? WHERE id_noticia= ? ');
    $consulta->execute(array($nombre,$contenido,$idCategoria,$id));
  }



}
?>
