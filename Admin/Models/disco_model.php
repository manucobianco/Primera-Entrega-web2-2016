<?php
require_once 'model.php';
class DiscoModel extends Model{
  function getDiscos(){
      $consulta = $this->db->prepare("SELECT * FROM disco");
      $consulta->execute();
      return $consulta->fetchAll();
  }
  function cargarDisco($nombre,$anio,$discografica){
    $consulta = $this->db->prepare('INSERT INTO disco(nombre,anio,discografica) VALUES(:nombre,:anio,:discografica)');
    $consulta->execute(array(':nombre'=>$nombre,':anio'=>$anio,':discografica'=>$discografica));
  }

  function getDiscoById($id){
    $consulta = $this->db->prepare("SELECT * FROM disco WHERE id_disco=?");
    $consulta->execute(array($id));
    return $consulta->fetchAll();
  }
  function borrarDisco($id_disco){
    $consulta = $this->db->prepare('DELETE FROM disco WHERE id_disco=?');
    $consulta->execute(array($id_disco));
  }
  function  modificarDisco($id,$nombre,$anio,$discografica){
    $consulta = $this->db->prepare('UPDATE disco SET nombre = ?, anio = ?, discografica = ? WHERE id_disco=?');
    $consulta->execute(array($nombre,$anio,$discografica,$id));
  }


}
?>
