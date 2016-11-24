function recargarComentarios(id_noticia){
  $.ajax(
    {
      method:"GET",
      dataType: "JSON",
      url: "api/comentario/noticia/"+id_noticia,
      success: mostrarComentarios,
      error: function(data){alert("error")}
    }
  )
}

function mostrarComentarios(aux){
    // for (var i = 0; i < comantarios.length; i++) {//comantarios
    //   comentarios[i].comentario = tareas[i].finalizada ==0 ? false: true;
    // }
    var comentarios = aux.datos;
    var administrador = aux.admin;
     var rendered = Mustache.render(template,{coment:comentarios, admin:administrador});//el primer coment es el nombre de la variable, y le asigno comentarios!
     $('#tablaComentarios').html(rendered);

}

var template;
$.ajax({ url: 'js/templates/comentario.mst',
 success: function(templateReceived) {
   template = templateReceived;
 }
});

var repeticionRecCom;

$(document).ready(function(){

  function cargarPrincipal()
  {

    $.ajax({
      url:"index.php?action=mostrar_principal",
      method:"GET",
      dataType:"html",
      success: function(data){
        $("#contenido").html(data);
      },
      error: function(){
        alert("No se a podido cargar la info principal. Intente nuevamente mas tarde.");
      }
    });
  };

  cargarPrincipal();

  $("#lnkHome").on("click",function(event)
  {
    event.preventDefault();
    cargarPrincipal();

  });
  $("#lnkHome1").on("click",function(event)
  {
    event.preventDefault();
    cargarPrincipal();
  });

  $("#lnkIntegrantes").on("click",function(event)
  {
    event.preventDefault();
    $.ajax({
      url:"index.php?action=mostrar_integrantes",
      method:"GET",
      dataType:"html",
      success: function(data){
        $("#contenido").html(data);
      },
      error: function(){
        alert("No se a podido cargar la info de los integrantes. Intente nuevamente mas tarde.");
      }
    });
  });

$("#lnkDiscos").on("click",function(event)
{
  event.preventDefault();
  $.ajax({
    url:"index.php?action=mostrar_discos",
    method:"GET",
    dataType:"html",
    success: function(data){
      $("#contenido").html(data);
    },
    error: function(){
      alert("No se a podido cargar la info de los discos. Intente nuevamente mas tarde.");
    }
  });
});


$("#lnkNoticias").on("click",function(event)
{
  event.preventDefault();
  $.ajax({
    url:"index.php?action=mostrar_noticias",
    method:"GET",
    dataType:"html",
    success: function(data){
      $("#contenido").html(data);
    },
    error: function(){
      alert("No se a podido cargar la info de los noticias. Intente nuevamente mas tarde.");
    }
  });
});

$('#contenido').on('click', "#noticia .volverANoticias",function(event){

  event.preventDefault();
  $.ajax({
    url:"index.php?action=mostrar_noticias",
    method:"GET",
    dataType:"html",
    success: function(data){
      $("#contenido").html(data);
    },
    error: function(){
      alert("No se a podido cargar la info de los noticias. Intente nuevamente mas tarde.");
    }
  });
});

$("#lnkOpinion").on("click",function(event)
{
  event.preventDefault();
  $.ajax({
    url:"index.php?action=mostrar_opinion",
    method:"GET",
    dataType:"html",
    success: function(data){
      $("#contenido").html(data);
    },
    error: function(){
      alert("No se a podido cargar la pagina de opinion. Intente nuevamente mas tarde.");
    }
  });
});

$('#contenido').on("click", "#noticias .noticiasIndice", function(event){
  event.preventDefault();
   var id = $(this).attr('id');
   $.ajax({
     url:"index.php?action=trater_noticias_especificas&id="+id,
     method:"GET",
     dataType:"html",
     success: function(data){
       $("#contenido").html(data);
     },
     error: function(){
       alert("No se a podido cargar las noticias. Intente nuevamente mas tarde.");
     }
   });
});

$("#contenido").on("click", "#noticias .noticiaLink", function(event)
{
  event.preventDefault();
  clearInterval(repeticionRecCom);
  var id = $(this).attr('id');
  $.ajax({
    url:"index.php?action=noticia&id="+id,
    method:"GET",
    dataType:"html",
    success: function(data){
      $("#contenido").html(data);
      recargarComentarios(id);
      repeticionRecCom = setInterval(function(){recargarComentarios(id);},2000);//2000 dos segundos
    },
    error: function(){
      alert("No se a podido cargar la pagina de la noticia. Intente nuevamente mas tarde.");
    }
  });
});


$('#contenido').on('click', "#btnEnviarComentario",function(eve){
  eve.preventDefault();
    if( $('input:radio[name=estrellas]:checked').val()){
      var id = $(this).attr('numeroNoticia');

      $.ajax({
        type: 'POST',
        url:'api/comentario/' + $("#txtComentario").val() + '/' + id + '/' + $('input:radio[name=estrellas]:checked').val(),
        datatype: 'JSON',
        success: function(data){
          recargarComentarios(id);
        },
        error: function(data){
          alert("Error");
        }
      });
    }else {
      alert("Tiene que asignar una valoracion");
    }
});

$('#contenido').on('click', ".borrarComentarios",function(eve){
  eve.preventDefault();

      var id = $(this).attr('id');
      $.ajax({
        type: 'DELETE',
        url:'api/comentario/'+id,
        datatype: 'JSON',
        success: function(data){
          recargarComentarios($('#btnEnviarComentario').attr('numeroNoticia'));
        },
        error: function(data){
          alert("Error");
        }
      });
});



});//On document ready
