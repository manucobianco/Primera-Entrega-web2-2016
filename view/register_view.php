<?php
  include_once 'libs/Smarty.class.php';

class RegisterView {
    private $smarty;
    private $error;
  function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();

  }
  function mostrarRegistro(){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->display('register.tpl');
  }
  function mostrarError($error){
    array_push($this->errores,$error);
  }
}

?>
