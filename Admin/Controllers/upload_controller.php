<?php
include_once 'Controllers/controller.php';
include_once 'Models/categoria_model.php';
include_once 'Models/disco_model.php';
include_once 'Models/noticia_model.php';
include_once 'Models/opinion_model.php';


class UploadController extends Controller{
  public function __construct(){
    $this->modelOpinion=new OpinionModel();
    $this->modelDisco=new DiscoModel();
    $this->modelNoticia=new NoticiaModel();
    $this->modelCategoria=new CategoriaModel();
    $this->modelImagen=new ImagenModel();
  }
  //Altas
    function crearCategoria(){
        $this->modelCategoria->crearCategoria($_REQUEST['categoria']);
        $this->mostrarCrearCategoria();
    }
    function cargarNoticia(){
      $model=new NoticiaModel();
        $this->modelNoticia->cargarNoticia($_REQUEST['titulo'],$_REQUEST['contenido'],$_REQUEST['categoria']);
        $this->view->mostrarCargarNoticia();
    }
    function cargarDisco(){
        $this->modelDisco->cargarDisco($_REQUEST['nombre'],$_REQUEST['anio'],$_REQUEST['discografica']);
        $this->view->mostrarCargarDisco();
      }

    function cargarImagen(){
      if(isset($_FILES['imagen'])){
        $this->modelImagen->cargarImagen($_FILES['imagen']);
      }
    }

  //Bajas
    function borrarOpinion(){
        $this->modelOpinion->borrarOpinion($_REQUEST['id_opinion']);
        $this->mostrarAdmin();
    }
    function borrarImagen(){
        $this->modelImagen->borrarImagen($_REQUEST['id_imagen']);
        $this->mostrarCargarImagenes();
    }
    function borrarNoticia(){

        $this->modelNoticia->borrarNoticia($_REQUEST['id_noticia']);
        $this->mostrarCargarNoticia();
    }
    function borrarCategoria(){
        $this->modelCategoria->borrarCategoria($_REQUEST['id_categoriaNoticia']);
        $this->mostrarCrearCategoria();
    }
    function borrarDisco(){
        $this->modelDisco->borrarDisco($_REQUEST['id_disco']);
        $this->mostrarCargarDisco();
    }
  //Modificaciones
    function modificarCategoria(){
        $this->modelCategoria->modificarCategoria($_REQUEST['id_categoriaNoticia'],$_REQUEST['categoria']);
    }
    function modificarNoticia(){
        $this->modelNoticia->modificarNoticia($_REQUEST['id_noticia'],$_REQUEST['nombre'],$_REQUEST['contenido'],$_REQUEST['categoria']);
    }
    function modificarDisco(){
        $this->modelDisco->modificarDisco($_REQUEST['id_disco'],$_REQUEST['nombre'],$_REQUEST['anio'],$_REQUEST['discografica']);
    }

}

?>
