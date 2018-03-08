$("#frmworker").submit(function(e) {
    e.preventDefault();
            dataJson = [];
            $(".new").each(function(){
                structure = {};
                structure = $(this).val();
                dataJson.push(structure);
            });
            $.ajax({
              url: "nuevo-empleado",
              type: "POST",
               dataType:'json',
               data: ({data: dataJson }),
               success: function(result){
                 if (result==true) {
                   $("#frmworker")[0].reset();
                   $('#frmworker').after('<div class="mensaje">"¡Bien! ya está registrado"</div>');
                 }
                $('#frmworker').after('<div class="mensaje">'+result+'</div>');
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
