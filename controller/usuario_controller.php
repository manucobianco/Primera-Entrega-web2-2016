<?php
  include_once 'view/login_view.php';
  include_once 'view/register_view.php';
  include_once 'model/usuario_model.php';

  class UsuarioController {

    private $model;
    private $login_view;
    private $register_view;

    function __construct() {
      $this->model = new UsuarioModel();
      $this->login_view = new LoginView();
      $this->register_view = new RegisterView();
        }

    function mostrarLogin(){
      $this->login_view->mostrarLogin();
    }

    function mostrarRegistro(){
      $this->register_view->mostrarRegistro();
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
          $this->login_view->mostrarError("Usaurio o password incorrectos");
        }

      }
      else {
        $this->login_view->mostrarError("Debe ingresar un usaurio y password.");
      }
      $this->login_view->mostrarLogin();
    }

    function validarRegistro(){
        if (isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword1"]) && isset($_REQUEST["txtPassword2"])) {
          $email = $_REQUEST["txtEmail"];
          $pass1 = $_REQUEST["txtPassword1"];
          $pass2 = $_REQUEST["txtPassword2"];

          $cantUsuarios= $this->model->existeUsuario($email);

          if($cantUsuarios[0][0]>0){
            $this->register_view->mostrarError("Ya existe un usuario registrado con ese mail.");
          }
          else {
            if($pass1 == $pass2){
              $this->model->registrarUsuario($email,$pass1);
            }else{
              $this->register_view->mostrarError("Las contraseñas no coinciden");
            }
          }
        }
        else{
          $this->register_view->mostrarError("Debe ingresar un usaurio y password.");
        }
      $this->register_view->mostrarRegistro();
    }


  }
?>
