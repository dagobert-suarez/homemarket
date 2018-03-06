$(document).ready(function() {
    $("#dataGrid").DataTable()
} );

$("#frmcategory").submit(function(e) {
e.preventDefault();
        dataJson = [];
        $(".new").each(function(){
            structure = {};
            structure = $(this).val();
            dataJson.push(structure);
        });
        $.ajax({
          url: "crear-categoria",
          type: "POST",
           dataType:'json',
           data: ({data: dataJson }),
           success: function(result){
             if (result==true) {
               $("#frmcategory")[0].reset();
               $('#frmcategory').after('<div class="mensaje">"ya registrò"</div>');
             }
            $('#frmcategory').after('<div class="mensaje">'+result+'</div>');
             setTimeout(function(){
                  $('div.mensaje').remove();
                }, 5000);
            // console.log(result);
           },
           error: function(result){
              console.log(result);
           }
      });
});
