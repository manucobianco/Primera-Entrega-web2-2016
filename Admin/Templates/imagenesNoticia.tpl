{foreach $imagenes as $imagen}
<tr>
  <td><img src="{$imagen['path']}"/></td>
  <td><a class="glyphicon glyphicon-trash borrar-item-imagen"href="index.php?action=borrar_imagen_noticia&id_imagen={$imagen['id_imagendenoticia']}"></a>
  </td>
</tr>
{{/foreach}}
