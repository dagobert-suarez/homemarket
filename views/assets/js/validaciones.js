$("#frmregistro").submit(function(e) {
    e.preventDefault();
            dataJson = [];
            $(".new").each(function(){
                structure = {};
                structure = $(this).val();
                dataJson.push(structure);
            });
            $.ajax({
              url: "nuevo-cliente",
              type: "POST",
               dataType:'json',
               data: ({data: dataJson }),
               success: function(result){
                $('#frmregistro').after('<div class="mensaje">'+result+'</div>');
                 setTimeout(function(){
                      $('div.mensaje').remove();
                    }, 5000);
                console.log(result);
                 $("#frmregistro")[0].reset();
               },
               error: function(result){
                  console.log(result);
               }
          });
  });
