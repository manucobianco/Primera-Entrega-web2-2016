<?php
require 'api.php';
require '../model/comentarios_model.php';

class comentariosApi extends Api
{
  private $model;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new comentariosModel();
  }

  protected function comentario(){
    switch ($this->method) {
      case 'GET':
      if(count($this->args)>0){
        if($this->args[0] == "noticia" && isset($this->args[1])){
            $comentario = $this->model->mostrarComentarios($this->args[1]);
            $error['Error'] = "No se pudo obtener los comentarios";
            return ($comentario) ? $comentario : $error;
          }
      }
      break;
      case 'DELETE':
          if(count($this->args)>0){
            $error['Error'] = "No se pudo eliminar el comentario";
            $success['Success'] = "El comentario se borro";
            $filasAfectadas = $this->model->borrarComentario($this->args[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
      break;
      case 'POST':
          if((count($this->args)>0)&&(isset($this->args[1]))&&(isset($this->args[2]))){
            $error['Error'] = "No se pudo crear el comentario";
            $success['Success'] = "El comentario se creo";
            $comentarioCreado = $this->model->crearComentario($this->args[0],$this->args[1],$this->args[2]);//este $this->args era antes $argumentos
            return ($comentarioCreado == 1) ? $success : $error;
          }
          else{
            $error['Error'] = "Tiene q completar todos los campos";
            return $error;
          }
      break;
      default:
           return "Only accepts GET";
        break;
    }
   }
}
?>
