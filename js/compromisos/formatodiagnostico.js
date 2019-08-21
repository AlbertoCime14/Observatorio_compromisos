//===========inicializadores de variables========//
var programa_previo;
var programas_previos_especifico;
var programa = 0;
var url = "";
var datos_tabla_peprevios;
$(document).ready(function() {
    url = $("#url").val();
    programa = $("#programa").val();
    /******carga de datos*****/
    llenar_programas_previos();

    listar_municipios();

    llenar_programas_previos_tabla();
    limpiarcampos_pep();

});

function limpiarcampos_pep() {
    $("#txtDescripcion").val("");
    $("#txtObjetivo").val("");
    $("#cboPoliticapp").val(0);
    $("#txtPoblacionobj").val("");
    $("#txtResultados").val("");
    $("#txtLiga").val("");
    $("#programa_previo").val(0);
    $("#chkAplica").prop("checked", "checked");
    $("#cboLugarimpl option:selected").prop("selected", false);
    informacion_programa();
    validarcheck();
    $("#operador").remove();
    $("#operador1").remove();
    $("#operador2").remove();
}
$("#nuevoprograma").click(function() {
    $("#panel_p_estatal").css({ "display": "inline" });
    limpiarcampos_pep();
    $("#btnGuardarProgramaEstatalP").removeAttr("onclick");
    $("#btnGuardarProgramaEstatalP").attr("onclick", "add_programa_estaltal_previo()");

});

/**Funcion para editar programa estatal previo**/
function editar_p_estatal(id) {
    $("#panel_p_estatal").css({ "display": "inline" });
}

function eliminar_p_estatal(id) {
    new PNotify({
        title: 'Eliminar',
        text: '¿Seguro desea eliminar este programa presupuestal?',
        icon: 'fa fa-question-circle',
        type: 'warning',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: { 'dir1': 'down', 'dir2': 'right', 'modal': true }
    }).get().on('pnotify.confirm', function() {
        new PNotify({
            title: 'Eliminado',
            type: 'success',
        })
    }).on('pnotify.cancel', function() {
        //  alert('Cancelado');
    })
}

//============datos para llenar el combobox de un programa previo nuevo=================//
function llenar_programas_previos() {
    var route = "listar/programa_previo";
    $.ajax({
        type: "GET",
        url: url + route,
        data: "success=success",
        success: function(data) {
            try {
                programas_previos = JSON.parse(data);
                var objetos = (Object.values(programas_previos['programas_previos']));
                /**Defaul position 0**/
                var obj = new Option("option text", 0);
                $("#programa_previo").append(obj);
                $(obj).html("Seleccione");
                for (x = 0; x < objetos.length; x++) {
                    //aceder al valor especifico
                    /* console.log(objetos[x].vNombre); */
                    var obj = new Option("option text", objetos[x].iIdPrograma);
                    $("#programa_previo").append(obj);
                    $(obj).html(objetos[x].vNombre);

                }
            } catch (e) {
                programas_previos = null;
            }
            /*  var o = JSON.parse(data); */
            /*    var objetos = (Object.values(o['criteriofocalizacion']));
            	for (x = 0; x < objetos.length; x++) {
            	crear_tabla(objetos[x].vNombre);
			} */
        }
    });
}

/**
 * Siver para llenar la tabla de programas estatales previos
 */

/**
 * today
 */
function llenar_programas_previos_tabla() {
    var route = "listar/programa_previo_especifico/table";
    $.ajax({
        type: "POST",
        url: url + route,
        data: { "iIdPrograma": programa },
        dataType: "json",
        success: function(data) {
            try {
                $("#tblProgramaP_body").empty();
                var objetos = (Object.values(data['programas_previos_tabla']));
                datos_tabla_peprevios = objetos;
                for (x = 0; x < objetos.length; x++) {
                    var nodotabla = `<tr>
                    <td>${objetos[x].vNombre}</td>
                    <td class="ui-group-buttons">
                    <a class="btn btn-success" role="button" id="btnActualizarP${objetos[x].iIdConfiguracion}" onclick="actulizar_programa_previo(${objetos[x].iIdConfiguracion})">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-danger" role="button" id="btnEliminarP${objetos[x].iIdConfiguracion}" onclick="eliminar_programa_previo(${objetos[x].iIdConfiguracion})">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
                   </tr> `;
                    $('#tblProgramaP').find('tbody').append(nodotabla);
                }


            } catch (e) {

            }
            /*  var o = JSON.parse(data); */
            /*    var objetos = (Object.values(o['criteriofocalizacion']));
            	for (x = 0; x < objetos.length; x++) {
            	crear_tabla(objetos[x].vNombre);
			} */
        }
    });
}

function actulizar_programa_previo(id) {
    var rutaarchivo = "archivos/documentos_programas_estatales_previos/";
    limpiarcampos_pep();
    $("#chkAplica").prop('checked', false);
    $("#panel_p_estatal").show();
    $("#btnGuardarProgramaEstatalP").removeAttr("onclick");
    $("#btnGuardarProgramaEstatalP").attr("onclick", "actulizar_programa_previo_data(" + id + ")");
    for (x = 0; x < datos_tabla_peprevios.length; x++) {
        if (datos_tabla_peprevios[x].iIdConfiguracion == id) {
            $("#programa_previo").val(datos_tabla_peprevios[x].iIdProgramaPrevio);
            $("#txtPoblacionobj").val(datos_tabla_peprevios[x].tPoblacionObjetivo);
            $("#txtResultados").val(datos_tabla_peprevios[x].tResultadoEvaluacion);

            if (datos_tabla_peprevios[x].iAplica == 1) {
                $("#chkAplica").prop("checked", "checked");
                //  validarcheck(datos_tabla_peprevios[x].iIdImplementacion);
                validarcheck();
            } else {
                validarcheck();
            }
        } else {

        }
        if (datos_tabla_peprevios[x].tLiga == "") {
            operador = `<a href="${url + rutaarchivo + datos_tabla_peprevios[x].tArchivo}" id="operador">Ver archivo</a><a id="operador1"> || </a> <a id="operador2" href="#" onclick="eliminar_archivo('${datos_tabla_peprevios[x].tArchivo}')">Eliminar</a>`;
            $('#fileUploadForm_pep').append(operador);
            $("#txtLiga").attr("disabled", true);
        } else {
            $("#txtLiga").val(datos_tabla_peprevios[x].tLiga);
            $("#tArchivo").attr("disabled", true);
        }

    }
    listas_lugar_implementacion(id);
    informacion_programa();

}

function eliminar_programa_previo(id) {
    new PNotify({
        title: 'Eliminar',
        text: '¿Seguro desea este programa previo?',
        icon: 'fa fa-question-circle',
        type: 'warning',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: { 'dir1': 'down', 'dir2': 'right', 'modal': true }
    }).get().on('pnotify.confirm', function() {
        $('#btnEliminarP' + id).removeAttr("onclick");
        var recurso = "eliminar/programa_estatal_previo";
        $.ajax({
            type: "POST",
            url: url + recurso,
            data: { "iIdConfiguracion": id },
            dataType: 'text',
            success: function(data, status, xhr) {
                if (data == "correcto") {
                    $("#panel_p_estatal").hide();
                    $("#tblProgramaP_body").empty();
                    llenar_programas_previos_tabla();
                    limpiarcampos_pep();
                    new PNotify({
                        title: 'Programa previo eliminado',
                        type: 'success',
                    })
                } else {
                    new PNotify({
                        title: 'Error en la petición comuniquese con soporte',
                        type: 'error',
                    })
                }
            },
            error: function(jqXhr, textStatus, errorMessage) {
                console.log(jqXhr);
                console.log(textStatus);
                console.log(errorMessage);
                llenar_programas_previos_tabla();
            }
        });
    }).on('pnotify.cancel', function() {
        //  alert('Cancelado');
    })
}


function informacion_programa() {
    var route = "listar/programa_previo_especifico";
    if ($("#programa_previo").val() == 0) {
        $("#txtDescripcion").val("");
        $("#txtObjetivo").val("");
        $("#cboPoliticapp").val(0);
        $("#body_bienes_servicio").empty();
    } else {
        $.ajax({
            type: "POST",
            url: url + route,
            data: { "id_programa": $("#programa_previo").val() },
            dataType: "json",
            success: function(data) {
                try {
                    var objetos = (Object.values(data['programas_previos']));
                    for (x = 0; x < objetos.length; x++) {
                        //aceder al valor especifico
                        /* console.log(objetos[x].vNombre); */
                        $("#txtDescripcion").val(objetos[x].tDescripcion);
                        var obj = new Option("option text", objetos[x].iIdTipoPrograma);
                        $("#cboPoliticapp").append(obj);
                        $(obj).html(objetos[x].tNombretipopp);
                        $("#cboPoliticapp").val(objetos[x].iIdTipoPrograma);
                        $("#txtObjetivo").val(objetos[x].vNombreObjetivo);
                        listar_bienes_servicios($("#programa_previo").val());
                    }
                } catch (e) {
                    programas_previos_especifico = null;
                    new PNotify({
                        title: 'Error en la petición comuniquese con soporte',
                        type: 'error',
                    })
                }
            }
        });
    }
}

function listar_bienes_servicios($id) {
    var route = "listar/bienes_servicio";
    $.ajax({
        type: "POST",
        url: url + route,
        data: { "id_programa": $id },
        dataType: "json",
        success: function(data) {
            try {
                var objetos = (Object.values(data['bienes_servicios']));
                for (x = 0; x < objetos.length; x++) {
                    var nodotabla = `<tr>
                    <td>${objetos[x].vNombreServicio}</td>
                   </tr> `;
                    $('#bienes_servicio').find('tbody').append(nodotabla);


                }
            } catch (e) {
                programas_previos_especifico = null;
                new PNotify({
                    title: 'Error en la petición comuniquese con soporte',
                    type: 'error',
                })
            }
        }
    });
}

//=============apartado de validaciones==============//
//============valida el checkbox aplica o no aplica===//

function validarcheck() {
    var validador;
    if ($('#chkAplica').is(':checked')) {
        validador = false;
    } else {
        validador = true;
    }
    $("#txtPoblacionobj").prop("disabled", validador);
    $("#txtResultados").prop("disabled", validador);
    $("#txtLiga").prop("disabled", validador);
    $("#txtArchivo").prop("disabled", validador);
    $("#cboLugarimpl").prop("disabled", validador);
    validarreferencia();
}

function validarreferencia() {
    if ($("#txtLiga").val().length > 0) {

        $("#txtArchivo").attr("disabled", true);
    } else {
        $("#txtArchivo").attr("disabled", false);
    }

}
//============subida de informacion del programa estatal previo=======================//
function add_programa_estaltal_previo() {

    var aplica;
    if ($('#chkAplica').is(':checked')) {
        aplica = 1;
    } else {
        aplica = 0;
    }
    var programaprevio = $("#programa_previo").val();
    var poblacionobj = $("#txtPoblacionobj").val().trim();
    var resultados = $("#txtResultados").val().trim();
    var liga = $("#txtLiga").val();
    var archivo = $("#randon").val() + "-" + $("#txtArchivo").val().replace('C:\\fakepath\\', '');
    console.log(archivo);
    if (programaprevio == 0 || poblacionobj == "" || resultados == "" || liga == "" && archivo == "") {
        new PNotify({
            title: 'LLene correctamente los campos',
            type: 'error',
        })
    } else {

        $("#panel_p_estatal").hide();
        var route = "agregar/programa_estatal_previo";
        $.ajax({
            type: "POST",
            url: url + route,
            data: {
                "iIdPrograma": programa,
                "iIdProgramaPrevio": programaprevio,
                "tPoblacionObjetivo": poblacionobj,
                "tArchivo": archivo,
                "tLiga": liga,
                "tResultadoEvaluacion": resultados,
                "iAplica": aplica
            },
            dataType: "json",
            success: function(data) {
                llenar_programas_previos_tabla();
                add_lugar_implementacion(data.id_programapp);
                limpiarcampos_pep();
                new PNotify({
                    title: 'Registro agregado',
                    type: 'success',
                });

            }

        });
    }
}

function add_lugar_implementacion(id) {
    var municipios = $('#cboLugarimpl').val();
    var route = "agregar/lugar_implementacion";
    $.ajax({
        type: "POST",
        url: url + route,
        data: { "iIdConfiguracion": id, "iIdmunicipio": municipios },
        dataType: "json",
        success: function(data) {
            if (data == "correcto") {
                // new PNotify({
                //     title: 'Registro agregado',
                //     type: 'success',
                // });

            } else {
                new PNotify({
                    title: 'Error en la petición comuniquese con soporte',
                    type: 'error',
                })
            }
        }
    });
}

function listas_lugar_implementacion(id) {
    $("#cboLugarimpl option:selected").prop("selected", false);
    var route = "listar/lugar_implementacion";
    $.ajax({
        type: "POST",
        url: url + route,
        data: { "iIdConfiguracion": id },
        dataType: "json",
        success: function(data) {
            try {
                var objetos = (Object.values(data['lugares_implentacion']));

                //  $("#cboLugarimpl option[value=]").attr('selected', 'selected');
                for (x = 0; x < objetos.length; x++) {
                    $("#cboLugarimpl option[value='" + objetos[x].iIdmunicipio + "']").attr("selected", true);

                }


            } catch (e) {
                //  console.log(data);
                // new PNotify({
                //     title: 'Error en la petición comuniquese con soporte',
                //     type: 'error',
                // })
            }
        }
    });
}

function listar_municipios() {
    var route = "listar/municipio";
    $.ajax({
        type: "POST",
        url: url + route,
        data: { "success": "success" },
        dataType: "json",
        success: function(data) {
            try {
                var objetos = (Object.values(data['municipios']));
                for (x = 0; x < objetos.length; x++) {
                    var obj = new Option("option text", objetos[x].iIdMunicipio);
                    $("#cboLugarimpl").append(obj);
                    $(obj).html(objetos[x].vMunicipio);
                }


            } catch (e) {
                new PNotify({
                    title: 'Error en la petición comuniquese con soporte',
                    type: 'error',
                })
            }
        }
    });
}

/**
 * Subida de archivos en el servidor no olvidar cambiar permisos en el servidor de lectura y escritura
 */


function add_files_pep() {
    console.log("arc");
    var form = $('#fileUploadForm_pep')[0];
    var data = new FormData(form);
    var route = "agregar/programaestatalprevio/file";
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


                $('#txtLiga').val("");
                $('#txtLiga').attr("disabled", true);
            } else if (data == "vilidartiposarchivos") {
                new PNotify({
                    title: 'Error Solo archivos PDF y ZIP',
                    type: 'error',
                });
                $('#txtArchivo').val("");
            } else if (data == "incorrecto") {
                /* 		llenar_tabla_datos(); */
                new PNotify({
                    title: 'Error en la carga comuniquese con soporte',
                    type: 'error',
                });
                $('#txtArchivo').val("");
            }
        }
    });
}

function eliminar_archivo(archivo) {
    new PNotify({
        title: 'Eliminar',
        text: '¿Seguro desea eliminar el archivo?',
        icon: 'fa fa-question-circle',
        type: 'warning',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: { 'dir1': 'down', 'dir2': 'right', 'modal': true }
    }).get().on('pnotify.confirm', function() {
        var recurso = "borrar/programaestatalprevio/file";
        $.ajax({
            type: "POST",
            url: url + recurso,
            data: { "archivo": archivo },
            success: function(data) {
                if (data == "correcto") {
                    $('#txtLiga').attr("disabled", false);
                    $('#txtArchivo').attr("disabled", true);
                    $("txtArchivo").val("");
                    $("#operador").remove();
                    $("#operador1").remove();
                    $("#operador2").remove();
                    new PNotify({
                        title: 'Archivo eliminado',
                        type: 'success',
                    })
                } else {
                    new PNotify({
                        title: 'Error en la petición comuniquese con soporte',
                        type: 'error',
                    })
                }
            }
        });
    }).on('pnotify.cancel', function() {
        //  alert('Cancelado');
    })


}