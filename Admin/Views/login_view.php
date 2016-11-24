<?php
  include_once 'Libs/smarty/Smarty.class.php';

class loginView {
    private $smarty;
    private $error;
  function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();

  }
  function mostrarLogin(){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->display('login.tpl');
  }
  function mostrarError($error){
    array_push($this->errores,$error);
  }
}

?>
