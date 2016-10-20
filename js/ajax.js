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
