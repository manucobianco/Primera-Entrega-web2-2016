$(document).ready(function(){

  function cargarPrincipal()
  {
    $.ajax({
      url:"principal.html",
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

  $("#lnkHome").on("click",function()
  {
    cargarPrincipal();
  });
  $("#lnkHome1").on("click",function()
  {
    cargarPrincipal();
  });

  $("#lnkIntegrantes").on("click",function()
  {

    $.ajax({
      url:"integrantes.html",
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

$("#lnkDiscos").on("click",function()
{

  $.ajax({
    url:"discos.html",
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


$("#lnkOpinion").on("click",function()
{

  $.ajax({
    url:"opinion.html",
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






