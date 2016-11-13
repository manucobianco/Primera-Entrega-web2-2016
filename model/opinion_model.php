<?php
require_once 'model.php';
class opinionModel extends Model {
<<<<<<< HEAD
=======

>>>>>>> refs/remotes/origin/master
  
  function enviarOpinion($nombre,$email,$texto){
    $consulta=$this->db->prepare("INSERT INTO opinionusuario(nombre,email,opinion)Values(:nombre,:email,:texto)");
    $consulta->execute(array(':nombre'=>$nombre,':email'=>$email,':texto'=>$texto));
  }
}
?>
