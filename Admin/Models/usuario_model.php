<?php
require_once'model.php';
class UsuarioModel extends Model{

  function getUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $consulta->execute();
    return $consulta->fetchAll();
  }
  function getUsuarioById($id){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE id=?");
    $consulta->execute(array($id));
    return $consulta->fetch();
  }
  function modificarPermisosById($id){
    $usuario= $this->getUsuarioById($id);
    $SQL="";
    if ($usuario['tipo']==1){
      $SQL="UPDATE usuario SET tipo=2 WHERE id=?";
    }else{
      $SQL="UPDATE usuario SET tipo=1 WHERE id=?";
    }
    $consulta = $this->db->prepare($SQL);
    $consulta->execute(array($id));
  }

}
?>
