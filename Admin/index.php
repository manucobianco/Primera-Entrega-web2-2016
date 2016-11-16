<?php
include_once 'Config/config_app.php';
include_once 'Controllers/pagina_controller.php';
include_once 'Controllers/categoria_controller.php';
include_once 'Controllers/noticia_controller.php';
include_once 'Controllers/disco_controller.php';
include_once 'Controllers/imagen_controller.php';
include_once 'Controllers/opinion_controller.php';
include_once 'Controllers/usuario_controller.php';


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
    case ConfigApp::$ACTION_MOSTRAR_CARGAR_USUARIO:
      $controller = new PaginaController();
      $controller->mostrarCargarUsuario();
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
      $controller = new ImagenController();
      $controller->cargarImagen();
      break;
    case ConfigApp::$ACTION_CARGAR_NOTICIA:
      $controller = new NoticiaController();
      $controller->cargarNoticia();
      break;
    case ConfigApp::$ACTION_CREAR_CATEGORIA:
      $controller = new CategoriaController();
      $controller->crearCategoria();
      break;
    case ConfigApp::$ACTION_CARGAR_DISCO:
      $controller= new DiscoController();
      $controller->cargarDisco();
      break;
//Bajas
    case ConfigApp::$ACTION_BORRAR_OPINION:
      $controller= new OpinionController();
      $controller->borrarOpinion();
      break;
    case ConfigApp::$ACTION_BORRAR_IMAGEN:
      $controller= new ImagenController();
      $controller->borrarImagen();
      break;
    case ConfigApp::$ACTION_BORRAR_NOTICIA:
      $controller= new NoticiaController();
      $controller->borrarNoticia();
      break;
    case ConfigApp::$ACTION_BORRAR_CATEGORIA:
      $controller= new CategoriaController();
      $controller->borrarCategoria();
      break;
    case ConfigApp::$ACTION_BORRAR_DISCO:
      $controller= new DiscoController();
      $controller->borrarDisco();
      break;
//modificaciones
    case ConfigApp::$ACTION_MODIFICAR_NOTICIA:
      $controller= new NoticiaController();
      $controller->modificarNoticia();
      break;
    case ConfigApp::$ACTION_MODIFICAR_CATEGORIA:
      $controller= new CategoriaController();
      $controller->modificarCategoria();
      break;
    case ConfigApp::$ACTION_MODIFICAR_DISCO:
      $controller= new DiscoController();
      $controller->modificarDisco();
      break;
    case ConfigApp::$ACTION_MODIFICAR_USUARIO:
      $controller= new UsuarioController();
      $controller->modificarPermisos();
      break;

    default:
      echo 'Pagina no encontrada';
      break;
  }

}



?>
