<div class="panel-heading">
  {if $emailSession}
    <h3 class="panel-title">Dejanos tu comentario</h3>
        </div>
        <div class="panel-body row">
          <div class=" col-md-6 col-md-offset-3">
            <form id="form-comentario">
              <textarea class="form-control" name="texto" rows="8"id="txtComentario"></textarea>
              <button type="submit" class="btn btn-default"id="btnEnviarComentario">Enviar</button>
            </form>
          </div>
        </div>
        {/if}
        <div class="list-group">
            <ul id="listaComentarios">
              <!-- <li class="list-group-item active">Comentarios</li>
              {foreach $comentarios as $comentario}
                <li class="list-group-item">{$comentario['comentario']}</li>
              {/foreach} -->
            </ul>
        </div>
    <script src="js/upload.js"></script>
