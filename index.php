<?php
include_once 'config/config_app.php';
include_once 'controller/pagina_controller.php';
include_once 'controller/opinion_controller.php';
include_once 'controller/usuario_controller.php';
include_once 'controller/comentarios_controller.php';

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $paginaController = new PaginaController();
  $paginaController->mostrarHome();

  }
else {
  switch ($_REQUEST[ConfigApp:: $ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_PRINCIPAL:
        $paginaController = new PaginaController();
        $paginaController->mostrarPrincipal();
    break;

    case ConfigApp::$ACTION_MOSTRAR_INTEGRANTES:
        $paginaController = new PaginaController();
        $paginaController->mostrarIntegrantes();
    break;

    case ConfigApp::$ACTION_MOSTRAR_DISCOS:
        $paginaController = new PaginaController();
        $paginaController->mostrarDiscos();
    break;

    case ConfigApp::$ACTION_MOSTRAR_NOTICIAS:
        $paginaController = new PaginaController();
        $paginaController->mostrarNoticias();
    break;

    case ConfigApp::$ACTION_MOSTRAR_OPINION:
        $paginaController = new PaginaController();
        $paginaController->mostrarPaginaOpinion();
    break;

    case ConfigApp::$ACTION_ENVIAR_OPINION:
        $opinionController = new OpinionController();
        $opinionController->enviarOpinion();
    break;

    case ConfigApp::$ACTION_TRAER_DISCOS:
        $paginaController = new PaginaController();
        $paginaController->traerDiscos();
    break;

    case ConfigApp::$ACTION_TRAER_NOTICIAS_ESPECIFICAS:
        $paginaController = new PaginaController();
        $paginaController->traerNoticiasEspecificas();
    break;

    case ConfigApp::$ACTION_PAGINA_LOGIN:
        $usuarioController = new UsuarioController();
        $usuarioController->mostrarLogin();
    break;

    case ConfigApp::$ACTION_VALIDAR_LOGIN:
        $usuarioController = new UsuarioController();
        $usuarioController->validarLogin();
    break;

    case ConfigApp::$ACTION_REGISTER:
        $usuarioController = new UsuarioController();
        $usuarioController->mostrarRegistro();
    break;

    case ConfigApp::$ACTION_VALIDAR_REGISTER:
        $usuarioController = new UsuarioController();
        $usuarioController->validarRegistro();
    break;

    case ConfigApp::$ACTION_NOTICIA:
        $paginaController = new PaginaController();
        $paginaController->mostrarNoticia();
    break;

    // case ConfigApp::$ACTION_CATEGORIAS:
    //     $paginaController = new PaginaController();
    //     $paginaController->mostrarCategoria();
    // break;

    case ConfigApp::$ACTION_MOSTRAR_COMENTARIOS:
        $comentariosController = new ComentariosController();
        $comentariosController->mostrarComentarios();
    break;




  default:
    echo "Pagina no encontrada";
  break;
  }
}

?>
