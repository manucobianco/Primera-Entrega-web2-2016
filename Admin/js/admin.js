$(document).ready(function(){
/* codigo para pagina administracion
*/
"use strict";
function borrarActivo() {
  $("li").removeClass("active");
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
  $.ajax({
      type:"GET",
      dataType:"HTML",
      url: "index.php?action=home",
      success:function (data){
          $("#contenido").html(data);
            $(document).attr("title","Administracion-Principal");
      },
      error:function(data){
        window.history.pushState('error', 'error' , 'error.html');
        $(document).attr("title","error");
      }
  });
  borrarActivo();
  $("#home").addClass("active");
  });
$("#cargarImagenes").click(function(event){
    event.preventDefault();
    $.ajax({
        type:"GET",
        dataType:"HTML",
        url: "index.php?action=mostrar_cargar_imagenes",
        success:function (data){
            $("#contenido").html(data);
            $(document).attr("title","Administracion-Cargar Imagenes");
        },
        error:function(data){
          window.history.pushState('error', 'error' , 'error.html');
          $(document).attr("title","error");
        }
    });
    borrarActivo();
    $("#cargarImagenes").addClass("active");
});
$("#cargarNoticias").click(function(event){
    event.preventDefault();
    $.ajax({
        type:"GET",
        dataType:"HTML",
        url: "index.php?action=mostrar_cargar_noticia",
        success:function (data){
            $("#contenido").html(data);
            $(document).attr("title","Administracion-Cargar noticia");
        },
        error:function(data){
          window.history.pushState('error', 'error' , 'error.html');
          $(document).attr("title","error");
        }
    });
    borrarActivo();
    $("#cargarNoticias").addClass("active");
});
$("#cargarDisco").click(function(event){
  event.preventDefault();
  $.ajax({
    type:"GET",
    dataType:"HTML",
    url: "index.php?action=mostrar_cargar_disco",
    success:function (data){
      $("#contenido").html(data);
      $(document).attr("title","Administracion-Cargar Disco");
    },
    error:function(data){
      window.history.pushState('error', 'error' , 'error.html');
      $(document).attr("title","error");
    }
  });
  borrarActivo();
  $("#cargarDisco").addClass("active");

  });

$("#crearCategoria").click(function(event){
    event.preventDefault();
    $.ajax({
        type:"GET",
        dataType:"HTML",
        url: "index.php?action=mostrar_crear_categoria",
        success:function (data){
            $("#contenido").html(data);
            $(document).attr("title","Administracion-Crear categoria");
        },
        error:function(data){
          window.history.pushState('error', 'error' , 'error.html');
          $(document).attr("title","error");
        }
    });
    borrarActivo();
    $("#crearCategoria").addClass("active");

});

});
