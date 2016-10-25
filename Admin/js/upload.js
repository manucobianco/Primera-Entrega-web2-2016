$(document).ready(function(){
"use strict";

function limpiarValores() {
  $("input").val("");
  $("textarea").val("");
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

//imagenes
$("#form-imagen").submit(function(event){
  event.preventDefault();
  var imagen= document.getElementById("input-imagen");
  var file= imagen.files[0];
  var descripcion= $("#inputDescripcion").val();
  var data = new FormData();
  data.append("imagen",file);
  data.append("descripcion",descripcion);
  $.ajax({
   method: "POST",
   url: "index.php?action=cargar_imagen",
   data: data,
   contentType: false,
   cache: false,
   processData:false,
   complete:function(){
     cargarContenido("cargar_imagenes","Administracion-Administrar Imagenes");
     alert("se cargaron los datos.");
   }
  });

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
      ,complete:function(){
      cargarContenido("cargar_noticia","Administracion-Administrar Imagenes");
        alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo
    });
  }else {
    alert("Por favor complete todos los campos.");
  }
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
      ,complete:function(){
      cargarContenido("crear_categoria","Administracion-Administrar Categorias");
        alert("se cargaron los datos.");
      }
    });
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
      ,complete:function(){
        cargarContenido("cargar_disco","Administracion-Administrar Discos");
        alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo
    });
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
    ,complete:function(){
    cargarContenido("cargar_disco","Administracion-Administrar Discos");
      alert("se borro el disco.");} // Con false, jQuery selecciona automaticamente el tipo
  });
});

$(".borrar-imagen").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){
    cargarContenido("cargar_imagenes","Administracion-Administrar Imagenes");
      alert("se borro la imagen.");} // Con false, jQuery selecciona automaticamente el tipo
  });
});
$(".borrar-categoria").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){
      cargarContenido("crear_categoria","Administracion-Administrar Imagenes");
      alert("se borro la categoria y sus noticias.");} // Con false, jQuery selecciona automaticamente el tipo
  });
});
$(".borrar-noticia").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){
      cargarContenido("cargar_noticia","Administracion-Administrar Noticia");
      alert("se borro la noticia.");} // Con false, jQuery selecciona automaticamente el tipo
  });
});
$(".borrar-opinion").click(function(event) {
  event.preventDefault();
  var src=$(this).attr("href");
  $.ajax({
     type : "GET"
    ,url : src
    ,complete:function(){
      cargarContenido("home","Administracion-Administrar Opiniones");
      alert("se borro la opinion.");} // Con false, jQuery selecciona automaticamente el tipo
  });
});

$(".mostrar-modificar-categoria").click(function(event){
  event.preventDefault();
  var url=$(this).attr("href");
  window.open(url,"Modificar","width=300,height=200,menubar=no");
  var r = confirm("Luego de modificar la categoria presione aceptar para continuar.");
  if (r == true) {
      cargarContenido("crear_categoria","Administracion-Administrar Imagenes");
  }
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
  window.open(url,"Modificar","width=300,height=200,menubar=no");
  var r = confirm("Luego de modificar el disco presione aceptar para continuar.");
  if (r == true) {
      cargarContenido("cargar_disco","Administracion-Administrar Discos");
  }
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
  var r = confirm("Luego de modificar la noticia presione aceptar para continuar.");
  if (r == true) {
      cargarContenido("cargar_noticia","Administracion-Administrar noticia");
  }
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

});
