<?php
require_once 'model.php';
class DiscosModel extends Model {

  function traerDiscos(){

    $traer=$this->db->prepare("SELECT * FROM disco");
    $traer->execute();
    return $traer->fetchAll();

  }
}
?>
