$(document).ready(function(){
"use strict";
function limpiarValores() {
  $("input").val("");
  $("textarea").val("");
}
$("#form-opinion").submit(function(ev){
  ev.preventDefault();
  var datos = new FormData();

  // Agregamos las imagenes a los datos a subir

  var nombre =  $("#name").val();

  // Cargamos el texto en los datos a subir
  datos.append("nombre",nombre);
  var email =  $("#email").val();

  // Cargamos el texto en los datos a subir
  datos.append("email",email);
  var texto =  $("#txtOpinion").val();

  // Cargamos el texto en los datos a subir
  datos.append("texto",texto);

  $.ajax({
     type : "POST"
    ,dataType : "json"
    ,url : "index.php?action=enviar_opinion"
    ,data : datos
    ,cache: false
    ,processData: false // No procesar los archivos
    ,contentType: false // Con false, jQuery selecciona automaticamente el tipo
    ,complete:function(){alert("se cargaron los datos.");} // Con false, jQuery selecciona automaticamente el tipo

    });
    limpiarValores();
  });

});
