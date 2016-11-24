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
  function cargarNoticia($nombre,$subTitulo,$idCategoria,$imagenes=array()){
    $contenido = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $consulta = $this->db->prepare('INSERT INTO noticia(nombre,subTitulo,fk_id_categoriaNoticia,contenido) VALUES(?,?,?,?)');
    $consulta->execute(array($nombre,$subTitulo,$idCategoria,$contenido));
    $idNoticia= $this->db->lastInsertId();
    for ($i=0; $i < count($imagenes['name']) ; $i++) {
      $nombre=uniqid().$imagenes['name'][$i];
      $ruta_provisional =$imagenes['tmp_name'][$i];
      $carpeta = "../images/Noticias/";
      $src = $carpeta.$nombre;
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
