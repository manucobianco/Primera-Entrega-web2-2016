<?php
require_once 'model.php';
class ComentariosModel extends Model {

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

  function crearComentario($comentario,$id_usuario,$id_noticia){
    $coment = $this->db->prepare("INSERT INTO comentario (comentario,fk_id_usuario,fk_id_noticia) VALUES (?,?,?) ");
    $coment->execute(array($comentario,$id_usuario,$id_noticia));
    return $coment->rowCount();
  }
}
?>
