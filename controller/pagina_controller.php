<?php
include_once 'view/pagina_view.php';
include_once 'model/discos_model.php';


class paginaController {

  private $discos_model;
  private $noticias_model;

  private $view;

  function __construct() {
    $this->discos_model = new discosModel();
    $this->view = new paginaView();

      }

    function mostrarHome(){
      session_start();
      if(isset($_SESSION["email"])){
        $emailSession = $_SESSION["email"];
      }
      else {
        $emailSession = "";
      }
        $this->view->mostrarHome($emailSession);
    }
    function mostrarPrincipal(){
      $this->view->mostrarPrincipal();
    }
    function mostrarIntegrantes(){
      $this->view->mostrarIntegrantes();
    }
    function mostrarDiscos(){
      $this->view->mostrarDiscos($this->discos_model->traerDiscos());
    }
    function mostrarPaginaOpinion(){
      $this->view->mostrarPaginaOpinion();
    }
    function traerDiscos(){
      $this->view->mostrar($this->discos_model->traerDiscos());
    }


    // function mostrarCategoria(){
    //   $filtro = 0;
    //   if(isset($_REQUEST['filtro']) && $_REQUEST['filtro'] !=0){
    //     $noticias= $this->noticias_model->
    //   }
    //   if(isset($id)) $this->view->mostrarCategoria($id);
    // }

  }
?>
