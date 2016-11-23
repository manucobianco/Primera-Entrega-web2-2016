<?php
require_once 'model.php';
class comentariosModel extends Model {

  function mostrarComentarios($id_noticia){
    $comentarios=$this->db->prepare("SELECT * FROM comentario WHERE id_noticia=?");
    $comentarios->execute(array($id_noticia));
    return $comentarios->fetchAll();
  }

  function borrarComentario($id_comentario){
    $comentarios=$this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $comentarios->execute(array($id_comentario));
    return $comentarios->rowCount();
  }

  function crearComentario($comentario,$id_noticia,$valoracion){
    $coment = $this->db->prepare("INSERT INTO comentario (comentario,id_noticia,valoracion) VALUES (?,?,?) ");
    $coment->execute(array($comentario,$id_noticia,$valoracion));
    return $coment->rowCount();
  }
}
?>
