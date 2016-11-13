<?php
include_once 'config/config_app.php';
include_once 'controller/pagina_controller.php';
include_once 'controller/opinion_controller.php';
include_once 'controller/usuario_controller.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $paginaController = new paginaController();
  $paginaController->mostrarHome();

  }
else {
  switch ($_REQUEST[ConfigApp:: $ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_PRINCIPAL:
        $paginaController = new paginaController();
        $paginaController->mostrarPrincipal();
    break;

    case ConfigApp::$ACTION_MOSTRAR_INTEGRANTES:
        $paginaController = new paginaController();
        $paginaController->mostrarIntegrantes();
    break;

    case ConfigApp::$ACTION_MOSTRAR_DISCOS:
        $paginaController = new paginaController();
        $paginaController->mostrarDiscos();
    break;

    case ConfigApp::$ACTION_MOSTRAR_NOTICIAS:
        $paginaController = new paginaController();
        $paginaController->mostrarNoticias();
    break;

    case ConfigApp::$ACTION_MOSTRAR_OPINION:
        $paginaController = new paginaController();
        $paginaController->mostrarPaginaOpinion();
    break;

    case ConfigApp::$ACTION_ENVIAR_OPINION:
        $opinionController = new opinionController();
        $opinionController->enviarOpinion();
    break;

    case ConfigApp::$ACTION_TRAER_DISCOS:
        $paginaController = new paginaController();
        $paginaController->traerDiscos();
    break;

    case ConfigApp::$ACTION_TRATER_NOTICIAS_ESPECIFICAS:
        $paginaController = new paginaController();
        $paginaController->traerNoticiasEspecificas();
    break;

    case ConfigApp::$ACTION_PAGINA_LOGIN:
        $usuarioController = new usuarioController();
        $usuarioController->mostrarLogin();
    break;

    case ConfigApp::$ACTION_VALIDAR_LOGIN:
        $usuarioController = new usuarioController();
        $usuarioController->validarLogin();
    break;

    case ConfigApp::$ACTION_REGISTER:
        $usuarioController = new usuarioController();
        $usuarioController->mostrarRegistro();
    break;

    case ConfigApp::$ACTION_VALIDAR_REGISTER:
        $usuarioController = new usuarioController();
        $usuarioController->validarRegistro();
    break;

    // case ConfigApp::$ACTION_CATEGORIAS:
    //     $paginaController = new paginaController();
    //     $paginaController->mostrarCategoria();
    // break;



  default:
    echo "Pagina no encontrada";
  break;
  }
}

?>
