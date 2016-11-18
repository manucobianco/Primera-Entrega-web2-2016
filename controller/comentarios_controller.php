<?php
include_once 'view/pagina_view.php';
include_once 'model/comentarios_model.php';

class ComentariosController  {

  private $view;
  private $model;


  function __construct() {
    $this->model = new ComentariosModel();
    $this->view = new PaginaView();
  }

  function mostrarComentarios(){
    session_start();
    if(isset($_SESSION["email"])){
      $emailSession = $_SESSION["email"];
    }
    else {
      $emailSession = "";
    }
      $this->view->mostrarComentarios($this->model->mostrarComentarios(),$emailSession);
  }

}
?>
