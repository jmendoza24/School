function busca_mun(){

 var id_estado=  $("#id_estado").val();

     $.ajax({
          url:"/api/v1/municipios",
          type: "get",
          data:{'id_estado':id_estado},
          success: function(respuesta){ 

               $("#id_municipio").html(respuesta);

          }
      });

}
function busca_mun2(){

 var id_estado=  $("#id_estadoc").val();

     $.ajax({
          url:"/api/v1/municipios",
          type: "get",
          data:{'id_estado':id_estado},
          success: function(respuesta){ 

               $("#id_municipioc").html(respuesta);

          }
      });

}


function tabla_alumnos(id){

  $.ajax({
          url:"/api/v1/alumnos",
          type: "get",
          data:{'id':id},
          success: function(respuesta){ 
            $("#tabla").html(respuesta);
          }
      });


}