var vale;
var programa = 0;
var url = "";
var rutaarchivo = "archivos/documentos_focalizacion/";
/**Objetos de las consultas**/
var criterios_all;
var criterios_values;
$(document).ready(function() {
    url = $("#url").val();
    programa = $("#programa").val();
    /******sirve para cargar datos y llenar la tabla*****/
    llenar_tabla_datos();
});

function llenar_tabla() {
    if (criterios_all == null) {
        location.reload();
    } else if (criterios_values == null) {
        var objetos_all = (Object.values(criterios_all['criteriofocalizacion']));
        for (x = 0; x < objetos_all.length; x++) {
            crear_tabla_insertar(objetos_all[x].iIdCriterioFoc, objetos_all[x].vNombre);
        }
    } else if (criterios_values != null) {
        var objetos_values = (Object.values(criterios_values['criteriofocalizacion']));
        var objetos_all = (Object.values(criterios_all['criteriofocalizacion']));
        for (x = 0; x < objetos_all.length; x++) {
            var contador = 0;
            for (i = 0; i < objetos_values.length; i++) {
                if (objetos_values[i].iIdCriterioFoc == objetos_all[x].iIdCriterioFoc) {
                    crear_tabla_actualizar(objetos_values[i].iIdCriterio, objetos_all[x].vNombre, objetos_values[i].vDescripcion, objetos_values[i].vJustificacion, objetos_values[i].vMedioVerificacion, objetos_values[i].tLiga, objetos_values[i].tArchivo);
                    contador = objetos_values[i].iIdCriterioFoc;
                    /* 					
                    	
                    					$("#itArchivo"+objetos_values[i].iIdCriterio).click(function (event) {
                    						event.preventDefault();
                    					}) */
                }
            }
            if (contador == 0) {
                crear_tabla_insertar(objetos_all[x].iIdCriterioFoc, objetos_all[x].vNombre);
                $("#itArchivo" + objetos_all[x].iIdCriterioFoc).click(function(event) {
                    //stop submit the form, we will post it manually.
                    event.preventDefault();
                })
            }
        }
    }
}

function consultar_cricterios() {
    var route = "listar/criteriofocalizacion";
    $.ajax({
        type: "GET",
        url: url + route,
        data: "success=success",
        success: function(data) {
            criterios_all = JSON.parse(data);
            /*   var o = JSON.parse(data); */
            /*  var objetos = (Object.values(o['criteriofocalizacion']));
            	for (x = 0; x < objetos.length; x++) {
            	objetos[x].iIdCriterioFoc;
            	crear_tabla(objetos[x].vNombre);
            } */
        }
    });
}

function consultar_cricterios_values() {
    var route = "listar/criteriofocalizacion_values/" + window.btoa(programa);
    $.ajax({
        type: "GET",
        url: url + route,
        data: "success=success",
        success: function(data) {
            try {

                criterios_values = JSON.parse(data);

            } catch (e) {
                criterios_values = null;
            }

            /*  var o = JSON.parse(data); */
            /*    var objetos = (Object.values(o['criteriofocalizacion']));
            	for (x = 0; x < objetos.length; x++) {
            	crear_tabla(objetos[x].vNombre);
            } */
        }
    });
}

function llenar_tabla_datos() {
    consultar_cricterios();
    consultar_cricterios_values();
    setTimeout(function() {
        $("#listado_criterios_body").empty();
        llenar_tabla();
    }, 2000);
}

function crear_tabla_actualizar(iIdCriterio, nombre_criterio, vDescripcion, vJustificacion, vMedioVerificacion, tLiga, tArchivo) {
    var atrib_liga;
    var atrib_archivo;
    var operador = "";
    var ttArchivo = "'" + tArchivo + "'";
    if (tArchivo != "") {
        atrib_liga = "disabled=disabled";
        operador = '<a href="' + url + rutaarchivo + tArchivo + '">Ver archivo</a><a> || </a> <a href="#" onclick="eliminar_archivo(' + iIdCriterio + ',' + ttArchivo + ')">Eliminar</a>';
    } else {
        atrib_archivo = "disabled=disabled";
    }
    /*  $("#listado_criterios_body").empty(); */
    nodotabla = '<tr><td>' + nombre_criterio + '</td><td><input class=form-control type="text" value="' + vDescripcion + '" id="ivDescripcion' + iIdCriterio + '"/></td><td><input class=form-control type="text" value="' + vJustificacion + '" id="ivJustificacion' + iIdCriterio + '"/></td><td><input class=form-control type="text"  value="' + vMedioVerificacion + '" id="ivMedioVerificacion' + iIdCriterio + '"/></td><td><input class=form-control type="text" value="' + tLiga + '" id="itLiga' + iIdCriterio + '" ' + atrib_liga + '  onkeyup="validadorA(' + iIdCriterio + ')"/></td><td><form method="POST" enctype="multipart/form-data" id="fileUploadForm' + iIdCriterio + '"><input type="file" style="width: 200px;" class="btn btn-default fileinput-upload fileinput-upload-button glyphicon glyphicon-upload" value="' + tArchivo + '" id="itArchivo' + iIdCriterio + '"  name="itArchivo' + iIdCriterio + '"  onchange="add_files(' + iIdCriterio + ')" ' + atrib_archivo + '/><input type="text" value="' + iIdCriterio + '" name="id" style="display: none"> </form> ' + operador + '</td><td class="ui-group-buttons" style="width: 150px;"><a class="btn btn-success" role="button" onclick="actualizar_criterio(' + iIdCriterio + ')" id="btn_actualizar' + iIdCriterio + '"><span class="glyphicon glyphicon-floppy-disk"></span></a><a class="btn btn-danger" role="button" id="btnBorrar' + iIdCriterio + '" onclick="borrar_criterio(' + iIdCriterio + ')"><span class="glyphicon glyphicon-trash" ></span></a></td></tr>';
    $('#listado_criterios').find('tbody').append(nodotabla);
}

function crear_tabla_insertar(iIdCriterioFoc, vNombre) {
    /*  $("#listado_criterios_body").empty(); */
    nodotabla = '<tr><td>' + vNombre + '</td><td><input class=form-control type="text" value="" id="vDescripcion' + iIdCriterioFoc + '"/></td><td><input class=form-control type="text" value="" id="vJustificacion' + iIdCriterioFoc + '"/></td><td><input class=form-control type="text"  value="" id="vMedioVerificacion' + iIdCriterioFoc + '"/></td><td><input class=form-control type="text" value="" id="tLiga' + iIdCriterioFoc + '" onkeyup="validador(' + iIdCriterioFoc + ')"/></td><td><form method="POST" enctype="multipart/form-data" id="fileUploadForm' + iIdCriterioFoc + '"><input type="file" style="width: 200px;" class="btn btn-default fileinput-upload fileinput-upload-button glyphicon glyphicon-upload" value="Subir" id="tArchivo' + iIdCriterioFoc + '"  name="tArchivo' + iIdCriterioFoc + '" onchange="add_files(' + iIdCriterioFoc + ')"/><input type="text" value="' + iIdCriterioFoc + '" name="id" style="display: none"></form></td><td class="ui-group-buttons" style="width: 150px;"><a id="btn_insert' + iIdCriterioFoc + '" class="btn btn-success" role="button" onclick="insertar_criterio(' + iIdCriterioFoc + ')" ><span class="glyphicon glyphicon-floppy-disk"></span></a><a class="btn btn-danger" role="button" id="btnBorrar' + iIdCriterioFoc + '" onclick=""  disabled="disabled" ><span class="glyphicon glyphicon-trash"  ></span></a></td></tr>';
    $('#listado_criterios').find('tbody').append(nodotabla);
}
/*****funciones para insertar y actualizar******/
function insertar_criterio(id_criterio) {
    $('#btn_insert' + id_criterio).removeAttr("onclick");
    $('#btn_insert' + id_criterio).attr("disabled", true);
    var vDescripcion = $("#vDescripcion" + id_criterio).val().trim();
    var vJustificacion = $("#vJustificacion" + id_criterio).val().trim();
    var vMedioVerificacion = $("#vMedioVerificacion" + id_criterio).val().trim();
    var tLiga = $("#tLiga" + id_criterio).val().trim();
    var tArchivo = $("#tArchivo" + id_criterio).val().replace('C:\\fakepath\\', '')
    var iIdPrograma = programa;
    var iIdCriterioFoc = id_criterio;

    var dataset = "vDescripcion=" + vDescripcion + "&vJustificacion=" + vJustificacion + "&vMedioVerificacion=" + vMedioVerificacion + "&tLiga=" + tLiga + "&tArchivo=" + tArchivo + "&iIdPrograma=" + iIdPrograma + "&iIdCriterioFoc=" + iIdCriterioFoc;
    var route = "agregar/criteriofocalizacion";
    if (vDescripcion == "" || vJustificacion == "" || vMedioVerificacion == "" || tArchivo == "" && tLiga == "") {
        new PNotify({
            title: 'Primero llene los campos antes de guardar',
            type: 'error',
        })
        llenar_tabla_datos();
    } else {
        $.ajax({
            beforeSend: function(xhr, opts) {

            },
            type: "POST",
            url: url + route,
            data: dataset,
            success: function(data) {
                if (data == "correcto") {
                    llenar_tabla_datos();
                    new PNotify({
                        title: 'Registro agregado',
                        type: 'success',
                    });
                } else {
                    new PNotify({
                        title: 'Error en la petición comuniquese con soporte',
                        type: 'error',
                    })
                }
            }
        });
    }
}
//===============================acttualizacion==================//
/*****funciones para insertar y actualizar******/
function actualizar_criterio(id_criterio) {
    $('#btn_actualizar' + id_criterio).removeAttr("onclick");
    $('#btn_actualizar' + id_criterio).attr("disabled", true);
    var vDescripcion = $("#ivDescripcion" + id_criterio).val().trim();
    var vJustificacion = $("#ivJustificacion" + id_criterio).val().trim();
    var vMedioVerificacion = $("#ivMedioVerificacion" + id_criterio).val().trim();
    var tLiga = $("#itLiga" + id_criterio).val().trim();
    var tArchivo = $("#itArchivo" + id_criterio).val().replace('C:\\fakepath\\', '');
    var iIdPrograma = programa;
    var iIdCriterioFoc = id_criterio;
    var dataset = "vDescripcion=" + vDescripcion + "&vJustificacion=" + vJustificacion + "&vMedioVerificacion=" + vMedioVerificacion + "&tLiga=" + tLiga + "&tArchivo=" + tArchivo + "&iIdPrograma=" + iIdPrograma + "&iIdCriterioFoc=" + iIdCriterioFoc;
    var route = "actualizacion/criteriofocalizacion";
    if (vDescripcion == "" || vJustificacion == "" || vMedioVerificacion == "") {
        new PNotify({
            title: 'Primero llene los campos antes de guardar',
            type: 'error',
        })
        llenar_tabla_datos();
    } else {
        $.ajax({
            type: "POST",
            url: url + route,
            data: dataset,
            success: function(data) {
                if (data == "correcto") {
                    llenar_tabla_datos();
                    new PNotify({
                        title: 'Registro modificado',
                        type: 'success',
                    });
                } else {
                    llenar_tabla_datos();
                    new PNotify({
                        title: 'Sin cambios realizados',
                        type: 'error',
                    })
                }
            }
        });
    }
}

function add_files(id) {

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

function eliminar_archivo(id, archivo) {


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
        var recurso = "borrar/criteriofocalizacion/file";
        var data_recurso = "archivo=" + archivo;
        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function(data) {
                if (data == "correcto") {
                    $('#itLiga' + id).attr("disabled", false);
                    $("#itArchivo" + id).val("");
                    actualizar_criterio(id);
                    llenar_tabla_datos();

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

function borrar_criterio(id) {
    new PNotify({
        title: 'Eliminar',
        text: '¿Seguro desea eliminar este criterio?',
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
        var recurso = "eliminar/criteriofocalizacion";
        var data_recurso = "iIdCriterio=" + id;
        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function(data) {
                if (data == "correcto") {
                    llenar_tabla_datos();
                    $('#btnBorrar' + id).removeAttr("onclick");
                    $('#btnBorrar' + id).attr("disabled", true);


                    new PNotify({
                        title: 'Eliminado',
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

function validador(id) {
    var input = $('#tLiga' + id).val().trim();
    if (input == "") {
        $('#tArchivo' + id).attr("disabled", false);
    } else {
        $('#tArchivo' + id).attr("disabled", true);
    }
}

function validadorA(id) {
    var input = $('#itLiga' + id).val().trim();
    if (input == "") {
        $('#itArchivo' + id).attr("disabled", false);
    } else {
        $('#itArchivo' + id).attr("disabled", true);
    }
}