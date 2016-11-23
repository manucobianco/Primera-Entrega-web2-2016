<?php
require_once'model.php';
class NoticiaModel extends Model{

  function getNoticias(){
    $consulta = $this->db->prepare("SELECT * FROM noticia");
    $consulta->execute();
    return $consulta->fetchAll();
  }
  function getNoticiaById($id){
    $consulta=$this->db->prepare('SELECT * FROM noticia WHERE id_noticia=?');
    $consulta->execute(array($id));
    $noticia=$consulta->fetchAll();
    return $noticia;
  }
  function cargarNoticia($nombre,$contenido,$idCategoria,$imagenes=array()){
    $consulta = $this->db->prepare('INSERT INTO noticia(nombre,contenido,fk_id_categoriaNoticia) VALUES(:nombre,:contenido,:categoria)');
    $consulta->execute(array(':nombre'=>$nombre,':contenido'=>$contenido,':categoria'=>$idCategoria));
    $idNoticia= $this->db->lastInsertId();
    for ($i=0; $i < count($imagenes['name']) ; $i++) {
      $nombre=$imagenes['name'][$i];
      $ruta_provisional =$imagenes['tmp_name'][$i];
      $carpeta = "../images/Noticias/";
      $src = $carpeta.uniqid().$nombre;
      $consulta=$this->db->prepare('INSERT INTO imagendenoticia(path,nombre,fk_id_noticia) VALUES(?,?,?)');
      $consulta->execute(array($src,$nombre,$idNoticia));
      move_uploaded_file($ruta_provisional, $src);
    }
  }
  function borrarNoticia($id_noticia){
    $consulta = $this->db->prepare('DELETE FROM noticia WHERE id_noticia=?');
    $consulta->execute(array($id_noticia));
  }
  function borrarNoticiaById($fk_id_categoriaNoticia){
    $consulta =$this->db->prepare('SELECT * FROM noticia WHERE fk_id_categoriaNoticia=?');
    $consulta->execute(array($fk_id_categoriaNoticia));
    $noticias= $consulta->fetchAll();
    foreach ($noticias as $noticia){
      $consulta =$this->db->prepare('SELECT * FROM imagendenoticia WHERE fk_id_noticia=?');
      $consulta->execute(array($noticia['id_noticia']));
      $imagenes=$consulta->fetchAll();
      foreach ($imagenes as $imagen){
        unlink($imagen['path']);
        $consulta =$this->db->prepare('DELETE FROM imagendenoticia WHERE fk_id_noticia=?');
        $consulta->execute(array($noticia['id_noticia']));
      }
    }
    $consulta = $this->db->prepare('DELETE FROM noticia WHERE id_noticia=?');
    $consulta->execute(array($fk_id_categoriaNoticia));

  }
  function modificarNoticia($id,$nombre,$contenido,$idCategoria,$imagenes=array()){
    $consulta = $this->db->prepare('UPDATE noticia SET nombre = ?, contenido = ?, fk_id_categoriaNoticia = ? WHERE id_noticia= ? ');
    $consulta->execute(array($nombre,$contenido,$idCategoria,$id));
    for ($i=0; $i < count($imagenes['name']) ; $i++) {
      $nombre=$imagenes['name'][$i];
      $ruta_provisional =$imagenes['tmp_name'][$i];
      $carpeta = "../images/Noticias/";
      $src = $carpeta.uniqid().$nombre;
      $consulta=$this->db->prepare('INSERT INTO imagendenoticia(path,nombre,fk_id_noticia) VALUES(?,?,?)');
      $consulta->execute(array($src,$nombre,$id));
      move_uploaded_file($ruta_provisional, $src);
    }
  }



}
?>
