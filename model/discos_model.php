<?php
require_once 'model.php';
class discosModel extends Model {

<<<<<<< HEAD
  function traerDiscos(){
=======
  function traerDiscos()
  {
>>>>>>> refs/remotes/origin/master
    $traer=$this->db->prepare("SELECT * FROM disco");
    $traer->execute();
    return $traer->fetchAll();

  }
}
?>
