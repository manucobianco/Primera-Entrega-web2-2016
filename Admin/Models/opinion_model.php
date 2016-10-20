<?php
require_once'model.php';
class OpinionModel extends Model{

  function getOpiniones(){
    $consulta = $this->db->prepare("SELECT * FROM opinionusuario");
    $consulta->execute();
    return $consulta->fetchAll();
  }
  function getOpinionById($id){
    $consulta = $this->db->prepare("SELECT * FROM opinionusuario WHERE id_opinionUsuario=?");
    $consulta->execute(array($id));
    return $consulta->fetchAll();
  }
  function borrarOpinion($id_opinion){
    $consulta = $this->db->prepare('DELETE FROM opinionusuario WHERE id_opinionUsuario=?');
    $consulta->execute(array($id_opinion));
  }
  
}
?>
