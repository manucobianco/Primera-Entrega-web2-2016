<?php
include_once 'Views/view.php';
include_once 'Models/categoria_model.php';
include_once 'Models/disco_model.php';
include_once 'Models/noticia_model.php';
include_once 'Models/opinion_model.php';
include_once 'Models/imagen_model.php';

class PaginaController{
  function __construct() {
    $this->view=new View();
    $this->modelOpinion=new OpinionModel();
    $this->modelDisco=new DiscoModel();
    $this->modelNoticia=new NoticiaModel();
    $this->modelCategoria=new CategoriaModel();
    $this->modelImagen=new ImagenModel();
    session_start();
  }
  //Navegacion
    function mostrarHome(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarHome($this->modelOpinion->getOpiniones());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarPrincipal(){
      if(isset($_SESSION["email"])){
          $this->view->mostrarPrincipal($this->modelOpinion->getOpiniones());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarAdmin(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarAdmin($this->modelOpinion->getOpiniones());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarCargarNoticia(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarCargarNoticia($this->modelCategoria->getCategorias(),$this->modelNoticia->getNoticias());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarCargarImagenes(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarCargarImagenes($this->modelImagen->getImagenes());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarCrearCategoria(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarCrearCategoria($this->modelCategoria->getCategorias());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarCargarDisco(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarCargarDisco($this->modelDisco->getDiscos());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarModificarDisco(){
      if(isset($_SESSION["email"])){
          $this->view->mostrarModificarDisco($_REQUEST['id_disco'],$_REQUEST['nombre'],$_REQUEST['anio'],$_REQUEST['discografica']);
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarModificarNoticia(){
      if(isset($_SESSION["email"])){
        $this->view->mostrarModificarNoticia($_REQUEST['id_noticia'],$_REQUEST['nombre'],$_REQUEST['contenido'],$this->modelCategoria->getCategorias());
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }

    function mostrarModificarCategoria(){
      if(isset($_SESSION["email"])){
      $this->view->mostrarModificarCategoria($_REQUEST['id_categoriaNoticia'],$_REQUEST['categoria']);
      }else{
        header("Location: index.php?action=pagina_login");
        die();
      }
    }


}

?>
