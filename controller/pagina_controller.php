<?php
include_once 'view/pagina_view.php';
include_once 'model/discos_model.php';
include_once 'model/noticias_model.php';


class PaginaController {

  private $discos_model;
  private $noticias_model;

  private $view;

  function __construct() {
    $this->discos_model = new DiscosModel();
    $this->noticias_model = new NoticiasModel();
    $this->view = new PaginaView();

      }

    function mostrarHome(){
      $this->view->mostrarHome();
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
    function mostrarNoticias(){
      $this->view->mostrarNoticias($this->noticias_model->traerCategorias(),$this->noticias_model->traerNoticias());
      }
    function mostrarPaginaOpinion(){
      $this->view->mostrarPaginaOpinion();
      }
    function traerDiscos(){
      $this->view->mostrar($this->discos_model->traerDiscos());
      }
    function traerNoticiasEspecificas(){
      $this->view->mostrarNoticias($this->noticias_model->traerCategorias(),$this->noticias_model->traerNoticiasEspecificas($_REQUEST["id_categoria"]));
    }

    function mostrarNoticia(){
      if (isset($_REQUEST["id"])){
        $this->view->mostrarNoticia($this->noticias_model->mostrarNoticia($_REQUEST["id"]));
      }
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
