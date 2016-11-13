<div class="container">
  <div class="col-xs-12 col-sm-9">
    {foreach $categorias as $categoria}
      <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-8">
              <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Indice</button>
              </p>
            <div class="noticiaTitulo" id="{$categoria['categoria']}">
              <h1>{$categoria['categoria']}</h1>
            </div>
            <div class="row">
            {foreach $noticias as $noticia}
            {if $noticia['fk_id_categoriaNoticia']==$categoria['id_categoriaNoticia']}

                <div class="col-xs-12 col-lg-6" id="noticiaIndividual">
                  <h2>{$noticia['nombre']}</h2>
                  <p>{$noticia['contenido']}</p>
                  <img src="images/imagen-no-disponible.jpg" alt="Imagen No Disponible" />
                  <p><a>Mas Detalles»</a></p>
              </div><!--/.col-xs-6.col-lg-4-->

                {/if}
            {/foreach}
              </div><!--/row-->
            </div><!--/row-->
          </div><!--/class="row row-offcanvas row-offcanvas-right"-->
        </div><!--/container-->
      {/foreach}
    </div>
  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
         <div class="list-group">
           <a class="list-group-item active">Indice</a>
           {foreach $categorias as $categoria}
            <a href="index.php?action=trater_noticias_especificas&id_categoria={$categoria['id_categoriaNoticia']}" class="list-group-item">{$categoria['categoria']}</a>
           {/foreach}
         </div>
  </div><!--/.sidebar-offcanvas-->
 </div>
</div>
