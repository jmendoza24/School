function validarFile(all)
    {
        //EXTENSIONES Y TAMANO PERMITIDO.
        var extensiones_permitidas = [".png", ".bmp", ".jpg", ".jpeg",".gif",".pdf"];
        var rutayarchivo = all.value;
        var ultimo_punto = all.value.lastIndexOf(".");
        var extension = rutayarchivo.slice(ultimo_punto, rutayarchivo.length);
        if(extensiones_permitidas.indexOf(extension) == -1)
        {   

              $.confirm({
                   animation: 'zoom',
                   title: '<p style="text-aling:center" class="text-bold">Mensaje</p>',
                   content: '<h4 style="text-aling:center" class="text-bold">Extensión de archivo no valida</h4>',
                   buttons: {
                       Ok: function () {
                        
                       }
                   }
               });

            document.getElementById(all.id).value = "";
            return; 
        }
        
    }

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


function tabla_alumnos(nivel, grado, grupo){

  $.ajax({
          url:"/api/v1/alumnos",
          type: "get",
          data:{'nivel':nivel,'grado':grado,'grupo':grupo},
          dataType: "json",
          success: function(respuesta){ 
            $("#tabla_alumnos").html(respuesta);
            $('.scroll-horizontal').DataTable( {
                  "scrollX": true
              } );

            $("#tabla_alumnos").show();

          }
      });


}

function carga_documentos(id){

   var nombre=  $("#documento"+id).val();
   var formData = new FormData($("#formUpload"+id)[0]);
   if(nombre==""){

     $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>Verificar campo requeridos!</strong></h3>',
           buttons: {
               Aceptar: function () {

                 
               }
           }
       });

   }else{

    $.ajax({
            url:"/api/v1/documentos",
            type: 'POST',
            method: "POST",        
            data:  formData,
            //async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta){ 
              $('#documentos').html(respuesta);

            },  
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
              // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }   

        });
    }

}

function delete_document(id,id_al){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });
   let token = document.querySelector('meta[name="csrf-token"]').content;

     $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>Delete this document?</strong></h3>',
           buttons: {
               Acept: function () {
                  
                  $.ajax({
                          url:"/api/v1/delete_document",
                          type: 'post',
                        //  method: "post",        
                          data:{'id':id,'id_al':id_al,'_token': token,},
                          //async: false,
                          //cache: false,
                          //contentType: false,
                          //processData: false,
                          success: function(respuesta){ 
                            $('#documentos').html(respuesta);

                          },  
                          error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                          }   

                      });

                 
               },
               Cancel: function(){

               }
           }
       });   

}