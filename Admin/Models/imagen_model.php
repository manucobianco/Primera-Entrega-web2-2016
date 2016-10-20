<?php
require_once 'model.php';

class ImagenModel extends Model
{


  

      function borrarImagen($id_imagen){
        $consulta= $this->db->prepare("DELETE FROM imagen WHERE id_imagen=?");
        $consulta->execute(array($id_imagen));
      }
      function getImagenes(){
        $consulta =$this->db->prepare("SELECT * FROM imagen");
        $consulta->execute();
        return $consulta->fetchAll();
      }




      function cargarImagen($file){
          $nombre = $file['name'];
          $tipo = $file['type'];
          $ruta_provisional = $file['tmp_name'];
          $size = $file['size'];
          $carpeta = "images/Upload/";
          $consulta= $this->db->prepare('INSERT INTO imagen(path,nombre) values(?, ?)');
          $consulta->execute(array($src,$nombre));
          $src = $carpeta.uniqid().$nombre;
          move_uploaded_file($ruta_provisional, $src);

      }



}

 ?>
