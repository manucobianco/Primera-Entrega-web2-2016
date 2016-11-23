<div id="noticia" class="container">

      <div class="blog-header">

        <h1 class="blog-title">{$noticia['nombre']}</h1>
        <p class="lead blog-description">{$noticia['subTitulo']}</p>

      </div>

          <div class="blog-post">
            <blockquote>
              <p>{$noticia['contenido']}</p>
            </blockquote>
          </div>
          <div class="panel-heading">
            {if $emailSession}
              <h3 class="panel-title">Dejanos tu comentario</h3>
                  </div>
                  <div class="panel-body row">
                    <div class=" col-md-6 col-md-offset-3">
                      <form id="form-comentario">
                        <textarea class="form-control" name="texto" rows="8"id="txtComentario"></textarea>
                        <div class="btnEnviarConEstrellas">
                            <button type="submit" class="btn btn-default" id="btnEnviarComentario" numeroNoticia="{$noticia['id_noticia']}">Enviar</button>

                            <p id="estellas" class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                              <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                              <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                              <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                              <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>
                        </div>
                      </form>
                    </div>
                  </div>
              {/if}
                  <div class="list-group">
                      <table id="tablaComentarios"  class="table table-striped">
                        <!-- <li class="list-group-item active">Comentarios</li>
                        {foreach $comentarios as $comentario}
                          <li class="list-group-item">{$comentario['comentario']}</li>
                        {/foreach} -->
                      </table>
                  </div>
              <script src="js/upload.js"></script>

          <nav>
            <ul class="pager">
              <li><a href="" class="volverANoticias"><< Volver</a></li>

            </ul>
          </nav>

    </div>
  </div>
