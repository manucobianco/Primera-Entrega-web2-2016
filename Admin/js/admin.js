$(document).ready(function(){
/* codigo para pagina administracion
*/
"use strict";
function borrarActivo() {
  $("li").removeClass("active");
}
function cargarContenido(url,titulo){
  $.ajax({
      type:"GET",
      dataType:"HTML",
      url: "index.php?action=mostrar_"+url,
      success:function (data){
          $("#contenido").html(data);
            $(document).attr("title",titulo);
      },
      error:function(data){
        window.history.pushState('error', 'error' , 'error.html');
        $(document).attr("title","error");
      }
  });
}
$(".borrar-opinion").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){alert("se borro la opinion.");} // Con false, jQuery selecciona automaticamente el tipo
  });
  $(".home").trigger("click");
});

$("#home").click(function(event){
  event.preventDefault();
  cargarContenido("home","Administracion-Principal");
  borrarActivo();
  $("#home").addClass("active");
});

$("#cargarImagenes").click(function(event){
    event.preventDefault();
    cargarContenido("cargar_imagenes","Administracion-Administrar Imagenes");
    borrarActivo();
    $("#cargarImagenes").addClass("active");
});

$("#cargarNoticias").click(function(event){
    event.preventDefault();
    cargarContenido("cargar_noticia","Administracion-Administrar Noticias");
    borrarActivo();
    $("#cargarNoticias").addClass("active");
});
$("#cargarDisco").click(function(event){
  event.preventDefault();
  cargarContenido("cargar_disco","Administracion-Administrar Discos");
  borrarActivo();
  $("#cargarDisco").addClass("active");
});

$("#crearCategoria").click(function(event){
    event.preventDefault();
    cargarContenido("crear_categoria","Administracion-Administrar Categorias");
    borrarActivo();
    $("#crearCategoria").addClass("active");
});

});
