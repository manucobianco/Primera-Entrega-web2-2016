<?php

class Model
{

  protected $db;

  function __construct() {
       try {
         $this->db = new PDO('mysql:host=localhost;dbname=cuarteto;charset=utf8', 'root', '');
         $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $e) {
           header('Location: dbConfig');
           die();
       }
  }
}
 ?>
