
$("#frmregistro").submit(function(e) {
    e.preventDefault();
            dataJson = [];
            $(".new").each(function(){
                structure = {};
                structure = $(this).val();
                dataJson.push(structure);
            });
           var  response = grecaptcha.getResponse();
            console.log(dataJson);
            $.ajax({
              url: "nuevo-cliente",
              type: "POST",
               dataType:'json',
               data: ({data: dataJson , cap:response}),
               success: function(result){
                  $('#frmregistro').after('<div class="mensaje">'+result+'</div>');
                   setTimeout(function(){
                        $('div.mensaje').remove();
                      }, 3000);
                  console.log(result);
               },
               error: function(result){
                  console.log(result);
               }
          });
          });
