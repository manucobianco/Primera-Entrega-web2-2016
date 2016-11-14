<?php
require_once 'model.php';
class usuarioModel extends Model {

  function getUsuario($email){
    $usuario = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $usuario->execute(array($email));
    return $usuario->fetch();
  }

  function existeUsuario($email){
    $usuario = $this->db->prepare("SELECT COUNT(*) FROM usuario WHERE email = ?");
    $usuario->execute(array($email));
    return $usuario->fetchAll();

  //   if($cant>0){
  //     return 1;
  //   }else{
  //     return 0;
  //   }
   }

  function registrarUsuario($email,$pass){
    $usuario = $this->db->prepare("INSERT INTO usuario (email,password) VALUES(?,?)");
    $password=  $hash = password_hash($pass, PASSWORD_DEFAULT);
    $usuario->execute(array($email,$password));
  }
}
?>
