$(document).ready(function(){
"use strict";
function limpiarValores() {
  $("input").val("");
  $("textarea").val("");
}
$("#btnCargarImagen").click(function(event){
  event.preventDefault();
  var imagen= document.getElementById("input-imagen");
  var file= imagen.files[0];
  var data = new FormData();
  data.append("imagen",file);

  $.ajax({
   method: "POST",
   url: "index.php?action=cargar_imagen",
   data: data,
   contentType: false,
   cache: false,
   processData:false,
  });
  $("#cargarImagenes").trigger("click");

});
$("#btnCargarNoticia").click(function(ev){
  ev.preventDefault();
  var datos = new FormData();
  var titulo =  $("#inputTituloNoticia").val();
  datos.append("titulo",titulo);

  var contenido =  $("#txtNoticia").val();
  datos.append("contenido",contenido);

  var categoria =  $("#categoria").val();
  datos.append("categoria",categoria);
  if(titulo!="" && contenido!=""){
    $.ajax({
       type : "POST"
      ,dataType : "json"
      ,url : "index.php?action=cargar_noticia"
      ,data : datos
      ,cache: false
      ,processData: false // No procesar los archivos
      ,contentType: false // Con false, jQuery selecciona automaticamente el tipo
      ,complete:function(){alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo

    });
  }else {
    alert("Por favor complete todos los campos.");
  }
  $(".cargar-noticia").trigger("click");
});
$("#btnCrearCategoria").click(function(ev){
  ev.preventDefault();
  var datos = new FormData();
  var categoria =  $("#inputNombreCategoria").val();
  datos.append("categoria",categoria);
  if(categoria !=""){
    $.ajax({
       type : "POST"
      ,dataType : "json"
      ,url : "index.php?action=crear_categoria"
      ,data : datos
      ,cache: false
      ,processData: false // No procesar los archivos
      ,contentType: false
      ,complete:function(){alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo

    });
    $(".crear-categoria").trigger("click");
  }else {
    alert("Por favor complete todos los campos.");
  }
  limpiarValores();

});

$("#btnCargarDisco").click(function(ev){
  ev.preventDefault();
  var datos = new FormData();
  var nombre =  $("#inputNombreDisco").val();
  datos.append("nombre",nombre);
  var anio= $("#inputAnio").val();
  datos.append("anio",anio);
  var discografica=  $("#inputDiscografica").val();
  datos.append("discografica",discografica);
  if(nombre!="" && anio!= "" && discografica!=""){
    $.ajax({
       type : "POST"
      ,dataType : "json"
      ,url : "index.php?action=cargar_disco"
      ,data : datos
      ,cache: false
      ,processData: false // No procesar los archivos
      ,contentType: false
      ,complete:function(){alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo
    });
    $(".cargar-disco").trigger("click");
  }else {
    alert("Por favor complete todos los campos.");
  }
  limpiarValores();

});
$(".borrar-disco").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){alert("se borro el disco.");} // Con false, jQuery selecciona automaticamente el tipo

  });
  $(".cargar-disco").trigger("click");
});

$(".borrar-imagen").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){alert("se borro la imagen.");} // Con false, jQuery selecciona automaticamente el tipo

  });
  $(".cargar-imagenes").trigger("click");
});
$(".borrar-categoria").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){alert("se borro la categoria y sus noticias.");} // Con false, jQuery selecciona automaticamente el tipo
  });
  $(".crear-categoria").trigger("click");
});
$(".borrar-noticia").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){alert("se borro la noticia.");} // Con false, jQuery selecciona automaticamente el tipo
  });
  $(".cargar-noticia").trigger("click");
});
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
$(".mostrar-modificar-categoria").click(function(event){
  event.preventDefault();
  var url=$(this).attr("href");
  window.open(url,"Modificar","width=300,height=200,menubar=no")

});

$("#btnModificarCategoria").click(function(event){
  event.preventDefault();
  var datos = new FormData();
  var categoria =  $("#inputNombreCategoria").val();
  datos.append("categoria",categoria);
  var id_categoriaNoticia= $("#id-categoria").val();
  datos.append("id_categoriaNoticia",id_categoriaNoticia);
  if(categoria !=""){
    $.ajax({
       type : "POST"
      ,dataType : "json"
      ,url : "index.php?action=modificar_categoria"
      ,data : datos
      ,cache: false
      ,processData: false // No procesar los archivos
      ,contentType: false
      ,complete:function(){alert("se modificaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo

    });
  }else {
    alert("Por favor complete todos los campos.");
  }
  window.close();
});
$(".mostrar-modificar-disco").click(function(event){
  event.preventDefault();
  var url=$(this).attr("href");
  window.open(url,"Modificar","width=300,height=200,menubar=no")

});
$("#btnModificarDisco").click(function(event){
  event.preventDefault();
  var datos = new FormData();
  var nombre =  $("#inputNombreDisco").val();
  datos.append("nombre",nombre);
  var anio= $("#inputAnio").val();
  datos.append("anio",anio);
  var discografica=  $("#inputDiscografica").val();
  datos.append("discografica",discografica);
  var id_disco=$("#id-disco").val();
  datos.append("id_disco",id_disco);
  if(nombre!="" && anio!= "" && discografica!=""){
    $.ajax({
       type : "POST"
      ,dataType : "json"
      ,url : "index.php?action=modificar_disco"
      ,data : datos
      ,cache: false
      ,processData: false // No procesar los archivos
      ,contentType: false
      ,complete:function(){alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo
    });

  }else {
    alert("Por favor complete todos los campos.");
  }
  window.close();
});
$(".mostrar-modificar-noticia").click(function(event){
  event.preventDefault();
  var url=$(this).attr("href");
  window.open(url,"Modificar","width=300,height=200,menubar=no")

});

$("#btnModificarNoticia").click(function(event){
  event.preventDefault();
  var datos = new FormData();
  var titulo =  $("#inputTituloNoticia").val();
  datos.append("nombre",titulo);

  var contenido =  $("#txtNoticia").val();
  datos.append("contenido",contenido);

  var categoria =  $("#categoria").val();
  datos.append("categoria",categoria);

  var id_noticia= $("#id-noticia").val();
  datos.append("id_noticia",id_noticia);
  if(titulo!="" && contenido!=""){
    $.ajax({
       type : "POST"
      ,dataType : "json"
      ,url : "index.php?action=modificar_noticia"
      ,data : datos
      ,cache: false
      ,processData: false // No procesar los archivos
      ,contentType: false // Con false, jQuery selecciona automaticamente el tipo
      ,complete:function(){alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo

    });
  }else {
    alert("Por favor complete todos los campos.");
  }
  window.close();
});




$("#inputFile").on("change", function(){
       /* Limpiar vista previa */
    $("#vista-previa").html('');

    var archivos = document.getElementById('inputFile').files;

    var navegador = window.URL || window.webkitURL;

    /* Recorrer los archivos */

    for(x=0; x<archivos.length; x++){
      /* Validar tamaño y tipo de archivo */
      var size = archivos[x].size;
      var type = archivos[x].type;
      var name = archivos[x].name;
      if (size > 1024*1024){
        $("#vista-previa").append("<p style='color: red'>El archivo "+name+" supera el máximo permitido 1MB</p>");
      }else if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png' && type != 'image/gif'){
        $("#vista-previa").append("<p style='color: red'>El archivo "+name+" no es del tipo de imagen permitida.</p>");
        }else{
            var objeto_url = navegador.createObjectURL(archivos[x]);
            $("#vista-previa").append("<img src="+objeto_url+" width='250' height='250'>");
         }
       }
     });


});
