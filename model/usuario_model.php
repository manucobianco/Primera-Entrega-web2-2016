<?php
require_once 'model.php';
class usuarioModel extends Model {

  function getUsuario($email){
    $usuario = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $usuario->execute(array($email));
    return $usuario->fetch();
  }
}
?>
