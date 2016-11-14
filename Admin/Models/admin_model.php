<?php
require_once 'model.php';
class adminModel extends model {

  function getUsuario($email){
    $usuario = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $usuario->execute(array($email));
    return $usuario->fetch();
  }
}
?>
