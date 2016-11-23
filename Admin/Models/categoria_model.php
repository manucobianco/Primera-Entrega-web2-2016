<?php
require_once 'model.php';
class CategoriaModel extends Model{

  function getCategorias(){
    $consulta = $this->db->prepare("SELECT * FROM categoriaNoticia");
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function getCategoriaById($id){
    $consulta = $this->db->prepare("SELECT * FROM categoriaNoticia WHERE id_categoriaNoticia=?");
    $consulta->execute(array($id));
    return $consulta->fetchAll();

  }
  function crearCategoria($categoria){
    $consulta = $this->db->prepare('INSERT INTO categoriaNoticia(categoria) VALUES(?)');
    $consulta->execute(array($categoria));
    if($consulta->rowCount() > 0)
      return 'categoria agregada';
    else
      return 'No se Agrego';
  }
  function borrarCategoria($id_categoria){
    $consulta = $this->db->prepare('DELETE FROM categoriaNoticia WHERE id_categoriaNoticia=?');
    $consulta->execute(array($id_categoria));
  }
  function modificarCategoria($id,$categoria){
    $consulta = $this->db->prepare('UPDATE categoriaNoticia SET categoria = ? WHERE id_categoriaNoticia=?');
    $consulta->execute(array($categoria,$id));
    if($consulta->rowCount() > 0)
      return 'categoria agregada';
    else
      return 'No se Agrego';
  }

}
?>
