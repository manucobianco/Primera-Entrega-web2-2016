<?php
include_once 'Config/config_app.php';
include_once 'Controllers/controller.php';
include_once 'Controllers/pagina_controller.php';
include_once 'Controllers/upload_controller.php';


//Tenga la clave action


//No tenga la clave action
//$_REQUEST['action']

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST)){
  $controller = new PaginaController();
  $controller->mostrarAdmin();
}
else {

  switch ($_REQUEST[ConfigApp::$ACTION]) {
//navegacion
    case  ConfigApp::$ACTION_DEFAULT:
      $controller = new PaginaController();
      $controller->mostrarPrincipal();
      break;
    case ConfigApp::$ACTION_MOSTRAR_CARGAR_IMAGENES:
      $controller = new PaginaController();
      $controller->mostrarCargarImagenes();
      break;
    case ConfigApp::$ACTION_MOSTRAR_CARGAR_NOTICIA:
      $controller = new PaginaController();
      $controller->mostrarCargarNoticia();
      break;
    case ConfigApp::$ACTION_MOSTRAR_CREAR_CATEGORIA:
      $controller = new PaginaController();
      $controller->mostrarCrearCategoria();
      break;
    case ConfigApp::$ACTION_MOSTRAR_CARGAR_DISCO:
      $controller = new PaginaController();
      $controller->mostrarCargarDisco();
      break;
    case ConfigApp::$ACTION_MOSTRAR_MODIFICAR_DISCO:
      $controller = new PaginaController();
      $controller->mostrarModificarDisco();
      break;
    case ConfigApp::$ACTION_MOSTRAR_MODIFICAR_NOTICIA:
      $controller = new PaginaController();
      $controller->mostrarModificarNoticia();
      break;
    case ConfigApp::$ACTION_MOSTRAR_MODIFICAR_CATEGORIA:
      $controller = new PaginaController();
      $controller->mostrarModificarCategoria();
      break;

//ABM
//Altas
    case ConfigApp::$ACTION_CARGAR_IMAGEN:
      $controller = new UploadController();
      $controller-> cargarImagenes();
      break;
    case ConfigApp::$ACTION_CARGAR_NOTICIA:
      $controller = new UploadController();
      $controller->cargarNoticia();
      break;
    case ConfigApp::$ACTION_CREAR_CATEGORIA:
      $controller = new UploadController();
      $controller->crearCategoria();
      break;
    case ConfigApp::$ACTION_CARGAR_DISCO:
      $controller= new UploadController();
      $controller->cargarDisco();
      break;
//Bajas
    case ConfigApp::$ACTION_BORRAR_OPINION:
      $controller= new UploadController();
      $controller->borrarOpinion();
      break;
    case ConfigApp::$ACTION_BORRAR_IMAGEN:
      $controller= new UploadController();
      $controller->borrarImagen();
      break;
    case ConfigApp::$ACTION_BORRAR_NOTICIA:
      $controller= new UploadController();
      $controller->borrarNoticia();
      break;
    case ConfigApp::$ACTION_BORRAR_CATEGORIA:
      $controller= new UploadController();
      $controller->borrarCategoria();
      break;
    case ConfigApp::$ACTION_BORRAR_DISCO:
      $controller= new UploadController();
      $controller->borrarDisco();
      break;
//modificaciones
    case ConfigApp::$ACTION_MODIFICAR_NOTICIA:
      $controller= new UploadController();
      $controller->modificarNoticia();
      break;
    case ConfigApp::$ACTION_MODIFICAR_CATEGORIA:
      $controller= new UploadController();
      $controller->modificarCategoria();
      break;
    case ConfigApp::$ACTION_MODIFICAR_DISCO:
      $controller= new UploadController();
      $controller->modificarDisco();
      break;

    default:
      echo 'Pagina no encontrada';
      break;
  }

}



?>
