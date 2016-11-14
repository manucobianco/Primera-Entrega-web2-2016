<?php
  include_once 'Views/login_view.php';
  include_once 'Models/admin_model.php';

  class adminController {

    private $model;
    private $view;


    function __construct() {
      $this->model = new adminModel();
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
        if(password_verify($pass,$usuario["password"])){
          session_start();
          $_SESSION["email"]=$email;
          if($usuario['tipo']==1){
            $_SESSION["tipo"]="admin";
          }else{
            $_SESSION["tipo"]="usuario";
          }
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

    function logout(){
      session_start();
      session_destroy();
      header("Location: index.php");
      die();  
    }
  }
?>
