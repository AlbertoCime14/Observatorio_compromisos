var vale;
var programa = 0;
var url = "";
var rutaarchivo = "archivos/documentos_focalizacion/";

$(document).ready(function() {
    url = $("#url").val();
    programa = $("#programa").val();
    /******sirve para cargar datos y llenar la tabla*****/

});

function add_files(id) {


    if (id == undefined){

        var form = $('#fileUploadForm')[0];
        var data = new FormData(form);
        var route = "acciones/Pfuentes/file";
        $.ajax({
            beforeSend: function() {
                new PNotify({
                    title: 'Subiendo archivos...',
                    type: 'warning',
                });

            },
            type: "POST",
            url: url + route,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == "correcto") {
                    /* 	llenar_tabla_datos(); */
                    new PNotify({
                        title: 'Archivo cargado correctamente',
                        type: 'success',
                    });


                    $('#tLiga' + id).val("");
                    $('#tLiga' + id).attr("disabled", true);
                } else if (data == "vilidartiposarchivos") {
                    new PNotify({
                        title: 'Error Solo archivos PDF y ZIP',
                        type: 'error',
                    });
                    $('#tArchivo' + id).val("");
                } else if (data == "incorrecto") {
                    /* 		llenar_tabla_datos(); */
                    new PNotify({
                        title: 'Error en la carga comuniquese con soporte',
                        type: 'error',
                    });
                    $('#tArchivo' + id).val("");
                }
            }
        });
    }
        else{
        var form = $('#fileUploadForm' + id)[0];
        var data = new FormData(form);
        var route = "agregar/criteriofocalizacion/file";
        $.ajax({
            beforeSend: function() {
                new PNotify({
                    title: 'Subiendo archivos...',
                    type: 'warning',
                });

            },
            type: "POST",
            url: url + route,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data == "correcto") {
                    /* 	llenar_tabla_datos(); */
                    new PNotify({
                        title: 'Archivo cargado correctamente',
                        type: 'success',
                    });


                    $('#tLiga' + id).val("");
                    $('#tLiga' + id).attr("disabled", true);
                } else if (data == "vilidartiposarchivos") {
                    new PNotify({
                        title: 'Error Solo archivos PDF y ZIP',
                        type: 'error',
                    });
                    $('#tArchivo' + id).val("");
                } else if (data == "incorrecto") {
                    /* 		llenar_tabla_datos(); */
                    new PNotify({
                        title: 'Error en la carga comuniquese con soporte',
                        type: 'error',
                    });
                    $('#tArchivo' + id).val("");
                }
            }
        });
    }

}