<?php
class discosModel {

  private $db;

  function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=cuarteto;charset=utf8', 'root', '');
       $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  function traerDiscos()
  {
    $traer=$this->db->prepare("SELECT * FROM disco");
    $traer->execute();
    return $traer->fetchAll();

  }
}
?>
