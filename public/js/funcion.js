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

function grados_niveles(){
  var level = $("#level").val();

  if(level ==1){
    $(".prescolar").show();
    $(".primaria").hide();
    $(".secundaria").hide();
    $(".prepa").hide();
  }else if(level==2){
    $(".prescolar").hide();
    $(".primaria").show();
    $(".secundaria").hide();
    $(".prepa").hide();
  }else if(level==3){
    $(".prescolar").hide();
    $(".primaria").hide();
    $(".secundaria").show();
    $(".prepa").hide();
  }else if(level==4){
    $(".prescolar").hide();
    $(".primaria").hide();
    $(".secundaria").hide();
    $(".prepa").show();
  }
}

function valida_curp(){
  $.ajax({
            url: '/valida_curp',          
            data: {"curp":$("#curp").val()},
            dataType: "json",
            type:"get",
            success: function(result){
              if(result==1){
                $.alert('Este curp ya esta registrado, favor de ponerse en contacto con el administrador');
                $("#btn_save").hide();
              }else{
                $("#btn_save").show();
              }
            }
        });
}

function guarda_credencial(id_alumno){
  if($("#avg_calif").val()=='' || $("#text_pie").val()==''){
    $.alert("Llene los campos solicitados");
  }else{
  $.ajax({
            url: '/guarda_credencial',          
            data: {"avg_calif":$("#avg_calif").val(),'text_pie':$("#text_pie").val(),'id_alumno':id_alumno},
            dataType: "json",
            type:"get",
            success: function(result){
              $.alert("Cambios guardados");
              $("#btn_imprime").show();
            }
        });

  }
}