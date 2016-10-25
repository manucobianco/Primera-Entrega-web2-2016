<?php
include_once 'Models\disco_model.php';

class DiscoController
{
  private $modelDisco;
  function __construct()
  {
    $this->modelDisco=new DiscoModel();
  }
  function cargarDisco(){
      $this->modelDisco->cargarDisco($_REQUEST['nombre'],$_REQUEST['anio'],$_REQUEST['discografica']);
      $this->view->mostrarCargarDisco();
  }
  function borrarDisco(){
      $this->modelDisco->borrarDisco($_REQUEST['id_disco']);
      $this->mostrarCargarDisco();
  }
  function modificarDisco(){
      $this->modelDisco->modificarDisco($_REQUEST['id_disco'],$_REQUEST['nombre'],$_REQUEST['anio'],$_REQUEST['discografica']);
  }
}
 ?>
