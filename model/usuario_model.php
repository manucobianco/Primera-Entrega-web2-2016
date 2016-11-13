<?php
class usuarioModel {

  private $db;

  function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=cuarteto;charset=utf8', 'root', '');
       $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getUsuario($email){
    $usuario = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $usuario->execute(array($email));
    return $usuario->fetch();
  }
}
?>
