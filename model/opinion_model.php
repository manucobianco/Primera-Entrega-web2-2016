<?php
class opinionModel {

  private $db;

  function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=cuarteto;charset=utf8', 'root', '');
       $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  
  function enviarOpinion($nombre,$email,$texto){
    $consulta=$this->db->prepare("INSERT INTO opinionusuario(nombre,email,opinion)Values(:nombre,:email,:texto)");
    $consulta->execute(array(':nombre'=>$nombre,':email'=>$email,':texto'=>$texto));
  }
}
?>
