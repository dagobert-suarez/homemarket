$("frmproducto").submit(function (e) {
  e.preventDefault();
  dataJson = [];
  $(".new").each(function(){
    structure = [];
    structure = $(this).val();
    dataJson.push(structure);
  });
  $.ajax({
    url: "crearProduct",
    type: "POST",
    dataType: "json",
    data: ({data: dataJson}),
    success: function(result){
      $('#frmproducto').after('<div class="mensaje">'+result+'</div>');
      setTimeout(function(){
        $('div.mensaje').remove();
      }, 5000);
      console.log(result);
    }
    error: function(result){
      console.log(result);
    }
  });
});
