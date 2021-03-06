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
                   content: '<h4 style="text-aling:center" class="text-bold">archivo no valido</h4>',
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
            $('.scroll-horizontal').DataTable();

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
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>required fields!</strong></h3>',
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
                    $.alert("loaded document");

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


function add_subjet(){
  var id_alumno=  $("#id_alumno").val();

$.ajax({
          url:"/api/v1/save_subjects",
          type: "get",
          data:{'id_alumno':id_alumno},
          dataType: "json",
          success: function(respuesta){ 
           
            $("#subjects").html(respuesta);

          }
      });


}


function save_subjects(id){

var id_materia=  $("#id_materia"+id).val();
var calificacion=  $("#calificacion"+id).val();
var comentarios=  $("#comentarios"+id).val();
var id_alumno=  $("#id_alumno").val();


$.ajax({
        url:"/api/v1/upd_mat",
        type: "get",
        data:{'id_materia':id_materia,'calificacion':calificacion,'comentarios':comentarios,'id_alumno':id_alumno,'id':id},
        dataType: "json",
        success: function(respuesta){ 

        }
    });


}


function delete_subjet(id){

var id_alumno=  $("#id_alumno").val();



 $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>Delete this subject?</strong></h3>',
           buttons: {
               Acept: function () {
                  
                  $.ajax({
                        url:"/api/v1/deletmat",
                        type: "get",
                        data:{'id_alumno':id_alumno,'id':id},
                        dataType: "json",
                        success: function(respuesta){ 

                                      $("#subjects").html(respuesta);


                        }
                    });

                 
               },
               Cancel: function(){

               }
           }
       }); 


  

}

function add_note(){

var id_alumno=  $("#id_alumno").val();


$.ajax({
          url:"/api/v1/add_note",
          type: "get",
          data:{'id_alumno':id_alumno},
          dataType: "json",
          success: function(respuesta){ 
            $("#notas").html(respuesta);

          }
      });

}


function upd_note(id){

var id_alumno=  $("#id_alumno").val();
var nota=$("#nota"+id).val();
$.ajax({
          url:"/api/v1/upd_note",
          type: "get",
          data:{'id_alumno':id_alumno,'nota':nota,'id':id},
          dataType: "json",
          success: function(respuesta){ 
            $("#notas").html(respuesta);

          }
      });
}


function delete_note(id){

var id_alumno=  $("#id_alumno").val();

  $.confirm({
           animation: 'zoom',
           icon: 'la la-warning',
           title: 'Mensaje',
           cancelButtonClass: 'btn-danger',
           content: '<h3 style="text-aling:center" class="texto_rojo"><strong>Delete this note?</strong></h3>',
           buttons: {
               Acept: function () {
                  
                  $.ajax({
                        url:"/api/v1/delete_note",
                        type: "get",
                        data:{'id':id,'id_alumno':id_alumno},
                        dataType: "json",
                        success: function(respuesta){ 
                          $("#notas").html(respuesta);

                        }
                    });

                 
               },
               Cancel: function(){

               }
           }
       }); 

}

function baja_pdf(){

var level=  $("#level").val();
var grade=  $("#grade").val();
var group=  $("#group").val();
var ethnicity=  $("#ethnicity").val();
var race=  $("#race").val();

$.ajax({
        url:"/api/v1/baja_pdf",
        type: "get",
        data:{'level':level,'grade':grade,'group':group,'ethnicity':ethnicity,'race':race},
        dataType: "json",
        success: function(respuesta){ 
                    $.alert("updated data");

          $("#reporte").html(respuesta);
          $('.file-export').DataTable({
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          });
          $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

        }
    });

}

function baja_asistencia(){

var level=  $("#level").val();
var grade=  $("#grade").val();
var group=  $("#group").val();
var ethnicity=  $("#ethnicity").val();
var race=  $("#race").val();
var f_inicio=  $("#f_inicio").val();
var f_fin=  $("#f_fin").val();

$.ajax({
        url:"/api/v1/baja_asistencia",
        type: "get",
        data:{'level':level,'grade':grade,'group':group,'ethnicity':ethnicity,'race':race,'f_fin':f_fin,'f_inicio':f_inicio},
        dataType: "json",
        success: function(respuesta){ 
            $.alert("updated data");

          $("#reporte").html(respuesta);
          $('.file-export').DataTable({
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ]
          });
          $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

        }
    });

}


function view_kardex(){

var id_alumno=  $("#id_alumno").val();
var vciclo=  $("#vciclo").val();

$.ajax({
        url:"/api/v1/kardex",
        type: "get",
        data:{'id_alumno':id_alumno,'vciclo':vciclo},
        dataType: "json",
        success: function(respuesta){ 
          if (respuesta==1) {

              $.confirm({
                       animation: 'zoom',
                       icon: 'la la-warning',
                       title: 'Mensaje',
                       cancelButtonClass: 'btn-danger',
                       content: '<h3 style="text-aling:center" class="texto_rojo"><strong>There are no subjects registered for this school Cycle</strong></h3>',
                       buttons: {
                           Acept: function () {
                              
                                               
                           },
                           Cancel: function(){

                           }
                       }
                   }); 

          }
            $("#subjects").html(respuesta);

        }
    });
}


function toma_asistencia(id_alumno,grado,grupo,nivel){
  var f_inicio=  $("#f_inicio").val();
  var f_fin=  $("#f_fin").val();

 var parametros ={ 
        "id_alumno":id_alumno,
        "asistencia":1,
        'grade':grado,
        'group':grupo,
        'nivel':nivel,
        'f_inicio':f_inicio,
        'f_fin':f_fin,


   };
$.ajax({
              url:"/api/v1/toma_asistencia",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                $("#fields").html(respuesta);
                                $.alert("saved assistance");


              },  
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
              // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
              }   

          });  
}


function asistencias(grado,grupo,nivel){
  var parametros ={ 
        'grade':grado,
        'group':grupo,
        'nivel':nivel

   };
  $.ajax({
              url:"/api/v1/lista_asisencia",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                $("#fields").html(respuesta);

              } 

          }); 
}



 function delete_student(){

   $.confirm({
               animation: 'zoom',
               icon: 'la la-warning',
               title: 'Mensaje',
               cancelButtonClass: 'btn-danger',
               content: '<h3 style="text-aling:center" class="texto_rojo"><strong>Delete this student</strong></h3>',
               buttons: {
                   Acept: function () {
                      document.getElementById("alumnos").submit();

                                       
                   },
                   Cancel: function(){

                   }
               }
           }); 

}


function view_list(id,name){


$('#large_familias').modal('hide');


  var parametros ={ 
        'id':id,
        'name':name,
     

   };
  $.ajax({
              url:"/api/v1/lista_asisencia_alumnos",
              type: "get",
              data:parametros,
              success: function(respuesta){ 
                $("#asis").html(respuesta);
                  $('#asistencia_al').DataTable({
                      dom: 'Bfrtip',
                      buttons: [
                          'copy', 'csv', 'excel'
                      ]
                  });
                  $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');

                      } 

          }); 
}