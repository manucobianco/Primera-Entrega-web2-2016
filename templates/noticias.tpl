<div id="noticias" class="container">
  <div id="categoria" class="col-xs-12 col-sm-9">
    {foreach $categorias as $categoria}

      <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-8">
              <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Indice</button>
              </p>
            {if $idcategoria == 0 || $categoria['id_categoriaNoticia'] == $idcategoria}
            <div class="noticiaTitulo" id="{$categoria['categoria']}">
              <h1>{$categoria['categoria']}</h1>
            </div>
            {/if}
            <div class="row">
            {foreach $noticias as $noticia}
            {if $noticia['fk_id_categoriaNoticia']==$categoria['id_categoriaNoticia']}

                <div class="col-xs-12 col-lg-6" id="noticiaIndividual">
                  <h2>{$noticia['nombre']}</h2>
                  <p>{$noticia['subTitulo']}</p>
                  {$isNoticia=false}
                  {foreach $imagenes as $imagen}
                    {if $imagen['fk_id_noticia']==$noticia['id_noticia']}
                      {if $isNoticia==false}
                        {$isNoticia=true}
                        <img src="images/Noticias/{$imagen['nombre']}" class="img-thumbnail" alt="Imagen No Disponible" />
                      {/if}
                    {/if}
                  {/foreach}
                  <p><a href="" class="noticiaLink"  id="{$noticia['id_noticia']}">Mas Detalles»</a></p>
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
            <a href="" id="{$categoria['id_categoriaNoticia']}"  class="list-group-item noticiasIndice">{$categoria['categoria']}</a>
           {/foreach}
         </div>
  </div><!--/.sidebar-offcanvas-->
 </div>
</div>
