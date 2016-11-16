<?php
include_once 'Views/view.php';
include_once 'Models/categoria_model.php';
include_once 'Models/disco_model.php';
include_once 'Models/noticia_model.php';
include_once 'Models/opinion_model.php';
include_once 'Models/imagen_model.php';
include_once 'Models/usuario_model.php';

class PaginaController{
  function __construct() {
    $this->view=new View();
    $this->modelOpinion=new OpinionModel();
    $this->modelDisco=new DiscoModel();
    $this->modelNoticia=new NoticiaModel();
    $this->modelCategoria=new CategoriaModel();
    $this->modelImagen=new ImagenModel();
    $this->modelUsuario=new UsuarioModel();
  }
  //Navegacion
    function mostrarHome(){
      $this->view->mostrarHome($this->modelOpinion->getOpiniones());
    }
    function mostrarPrincipal(){
      $this->view->mostrarPrincipal($this->modelOpinion->getOpiniones());
    }
    function mostrarAdmin(){
      $this->view->mostrarAdmin($this->modelOpinion->getOpiniones());
    }
    function mostrarCargarNoticia(){
      $this->view->mostrarCargarNoticia($this->modelCategoria->getCategorias(),$this->modelNoticia->getNoticias());
    }
    function mostrarCargarImagenes(){
      $this->view->mostrarCargarImagenes($this->modelImagen->getImagenes());
    }
    function mostrarCrearCategoria(){
      $this->view->mostrarCrearCategoria($this->modelCategoria->getCategorias());
    }
    function mostrarCargarDisco(){
      $this->view->mostrarCargarDisco($this->modelDisco->getDiscos());
    }
    function mostrarCargarUsuario(){
      $this->view->mostrarCargarUsuario($this->modelUsuario->getUsuarios());
    }
    function mostrarModificarDisco(){
      $this->view->mostrarModificarDisco($_REQUEST['id_disco'],$_REQUEST['nombre'],$_REQUEST['anio'],$_REQUEST['discografica']);
    }
    function mostrarModificarNoticia(){
      $this->view->mostrarModificarNoticia($_REQUEST['id_noticia'],$_REQUEST['nombre'],$_REQUEST['contenido'],$this->modelCategoria->getCategorias());
    }
    function mostrarModificarCategoria(){
      $this->view->mostrarModificarCategoria($_REQUEST['id_categoriaNoticia'],$_REQUEST['categoria']);
    }


}

?>
