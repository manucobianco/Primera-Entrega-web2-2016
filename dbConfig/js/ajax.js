$(".database").submit(function(ev) {
  ev.preventDefault();
  $.post( "index.php", $(this).serialize(), function() {
    $(".volver").attr("hidden","false");
  });

});
