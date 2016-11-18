<?php
require 'api.php';
require '../model/comentarios_model.php';

class ComentariosApi extends Api
{
  private $model;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentariosModel();
  }

  protected function comentario(){
    switch ($this->method) {
      case 'GET':
            $comentario = $this->model->mostrarComentarios();
            $error['Error'] = "No se pudo obtener los cometnarios";
            return ($comentario) ? $comentario : $error;
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
          if(count($this->args)>0){
            $error['Error'] = "No se pudo crear el comentario";
            $success['Success'] = "El comentario se creo";
            $comentarioCreado = $this->model->crearComentario($this->args[0]);//este $this->args era antes $argumentos
            return ($comentarioCreado == 1) ? $success : $error;
          }
      break;
      default:
           return "Only accepts GET";
        break;
    }
   }
}
?>
