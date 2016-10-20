<?php
  include_once 'view/pagina_view.php';
  include_once 'model/opinion_model.php';

  class opinionController {

    private $opinion_model;
    private $view;

    function __construct() {
      $this->opinion_model = new opinionModel();
      $this->view = new paginaView();
        }

        function enviarOpinion(){
          $this->opinion_model->enviarOpinion($_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['texto']);
        }
  }
?>
