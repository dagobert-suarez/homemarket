validación js del empleado
$("#frmWorker").submit(function(e) {
    e.preventDefault();
            dataJson = [];
            $(".new").each(function(){
                structure = {};
                structure = $(this).val();
                dataJson.push(structure);
            });
            $.ajax({
              url: "nuevo-Empleado",
              type: "POST",
               dataType:'json',
               data: ({data: dataJson }),
               success: function(result){
                 if (result==true) {
                   $("#frmWorker")[0].reset();
                   $('#frmWorker').after('<div class="mensaje">"¡Bien! Ya esta registrado"</div>');
                 }
                $('#frmWorker').after('<div class="mensaje">'+result+'</div>');
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
