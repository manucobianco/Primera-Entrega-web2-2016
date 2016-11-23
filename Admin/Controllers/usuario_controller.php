<?php
include_once 'Models/usuario_model.php';
class UsuarioController
{
  private $modelUsuario;
  function __construct()
  {
    $this->modelUsuario=new UsuarioModel();
  }
  function modificarPermisos(){
      $this->modelUsuario->modificarPermisosById($_REQUEST['id_usuario']);
  }

}
 ?>
