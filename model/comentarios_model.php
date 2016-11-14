<?php
require_once 'model.php';
class comentariosModel extends Model {

  function mostrarComentarios(){
    $comentarios=$this->db->prepare("SELECT * FROM comentario");
    $comentarios->execute();
    return $comentarios->fetchAll();
  }

  function borrarComentario($id_comentario){
    $comentarios=$this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $comentarios->execute(array($id_comentario));
    return $comentarios->rowCount();
  }

  function crearComentario($comentario){
    $coment = $this->db->prepare("INSERT INTO comentario (comentario) VALUES (?) ");
    $coment->execute(array($comentario));
    return $coment->rowCount();
  }
}
?>
