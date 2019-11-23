function guarda_catalogo(){
  event.preventDefault();
  var parametros = {"identificador":$("#identificador").val(),
                    "valor":$("#valor").val()
                  };

  if($("#identificador").val() != '' && $("#valor").val() != ''){
    $.ajax({
            url: '/api/v1/guarda_catalogo',          
            data: parametros,
            dataType: "json",
            type:"get",
            success: function(result){
              $("#cat_formas").html(result);
              $(".display").DataTable();
              $.alert("Agregado correctamente");
              $("#identificador").val('');
              $("#valor").val('');
              dragula([document.getElementById('card-drag-area')]);
            }
        });
    }else{
      $.alert("Seleccione los campos requeridos")
    }

}


function borra_catalogo(id){
  $.ajax({
            url: '/api/v1/elimina_catalogo',          
            data: {"id":id},
            dataType: "json",
            type:"get",
            success: function(result){
              $("#cat_formas").html(result);
              $(".display").DataTable();
              dragula([document.getElementById('card-drag-area')]);
            }
        });
}