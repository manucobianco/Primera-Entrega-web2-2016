<?php
require_once 'model.php';
class noticiasModel extends Model {

  function traerNoticias()
  {
    $traer=$this->db->prepare("SELECT * FROM noticia");
    $traer->execute();
    return $traer->fetchAll();
  }

  function traerCategorias()
  {
    $traer=$this->db->prepare("SELECT * FROM categorianoticia");
    $traer->execute();
    return $traer->fetchAll();
  }
  function traerNoticiasEspecificas($id_categoria){
    $noticias=$this->db->prepare("SELECT * FROM noticia WHERE fk_id_categoriaNoticia=?");
    $noticias->execute(array($id_categoria));
    return $noticias->fetchAll();
  }
  function mostrarNoticia($id_noticia){
    $noticia=$this->db->prepare("SELECT * FROM noticia WHERE id_noticia=?");
    $noticia->execute(array($id_noticia));
  //  print_r($noticia->fetch());
    return $noticia->fetch();
  }

}
?>
