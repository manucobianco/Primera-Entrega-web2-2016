<?php
class noticiasModel {

  private $db;

  function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=cuarteto;charset=utf8', 'root', '');
       $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  function traerNoticias()
  {
    $traer=$this->db->prepare("SELECT * FROM noticia");
    $traer->execute();
    return $traer->fetchAll();
  }

  function traerCategorias()
  {
    $traer=$this->db->prepare("SELECT * FROM categorianoticia");
    $traer->execute();
    return $traer->fetchAll();
  }
}
?>
