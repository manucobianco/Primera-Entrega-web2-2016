<?php
require_once'model.php';
class UsuarioModel extends Model{

  function getUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $consulta->execute();
    return $consulta->fetchAll();
  }
  function getUsuarioById($id){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario=?");
    $consulta->execute(array($id));
    return $consulta->fetch();
  }
  function modificarPermisosById($id){
    $usuario= $this->getUsuarioById($id);
    $SQL="";
    if ($usuario['tipo']==1){
      $SQL="UPDATE usuario SET tipo=0 WHERE id_usuario=?";
    }else{
      $SQL="UPDATE usuario SET tipo=1 WHERE id_usuario=?";
    }
    $consulta = $this->db->prepare($SQL);
    $consulta->execute(array($id));
  }

}
?>
