<?php
  include_once 'view/login_view.php';
  include_once 'model/usuario_model.php';

  class usuarioController {

    private $model;
    private $view;

    function __construct() {
      $this->model = new usuarioModel();
      $this->view = new loginView();
        }

    function mostrarLogin(){
      $this->view->mostrarLogin();
    }

    function validarLogin(){
      if(isset( $_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"])){
        $email = $_REQUEST["txtEmail"];
        $pass = $_REQUEST["txtPassword"];

        $usuario = $this->model->getUsuario($email);
        $usuario["password"];
        if(password_verify($pass,$usuario["password"])){
          session_start();
          $_SESSION["email"]=$email;
          header("Location: index.php");
          die();
        }
        else{
          $this->view->mostrarError("Usaurio o password incorrectos");
        }

      }
      else {
        $this->view->mostrarError("Debe ingresar un usaurio y password.");
      }
      $this->view->mostrarLogin();
    }
  }
?>
