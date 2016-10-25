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




      function cargarImagen($file,$descripcion){
          $nombre = $file['name'];
          $tipo = $file['type'];
          $ruta_provisional = $file['tmp_name'];
          $carpeta = "upload/";
          $src = $carpeta.uniqid().$nombre;
          $consulta= $this->db->prepare('INSERT INTO imagen(path,nombre) values(?, ?)');
          $consulta->execute(array($src,$descripcion));

          move_uploaded_file($ruta_provisional, $src);
      }



}

 ?>
