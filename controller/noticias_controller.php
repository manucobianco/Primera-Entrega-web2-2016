<?php
include_once 'view/pagina_view.php';
include_once 'model/noticias_model.php';
include_once 'model/comentarios_model.php';



  class noticiasController  {

    private $view;
    private $noticias_model;
    private $comentarios_model;

    function __construct() {
      $this->noticias_model = new noticiasModel();
      $this->comentarios_model = new comentariosModel();
      $this->view = new paginaView();
    }

    function mostrarNoticias(){
      $this->view->mostrarNoticias($this->noticias_model->traerCategorias(),$this->noticias_model->traerNoticias(), 0);
    }

    function mostrarNoticiasEspecificas(){
      $this->view->mostrarNoticias($this->noticias_model->traerCategorias(),$this->noticias_model->traerNoticiasEspecificas($_REQUEST['id']), $_REQUEST['id']);
    }

    function mostrarNoticia(){
      session_start();
      if(isset($_SESSION["email"])){
        $emailSession = $_SESSION["email"];
      }
      else {
        $emailSession = "";
      }
      if (isset($_REQUEST["id"])){
        $this->view->mostrarNoticia($this->noticias_model->mostrarNoticia($_REQUEST["id"]),$emailSession);
      }
    }
  }
?>
