<?php
include_once 'Models/opinion_model.php';
class OpinionController
{
  private $modelOpinion;
  function __construct()
  {
    $this->modelOpinion=new OpinionModel();
  }
  function borrarOpinion(){
      $this->modelOpinion->borrarOpinion($_REQUEST['id_opinion']);
      $this->mostrarAdmin();
  }

}
 ?>
