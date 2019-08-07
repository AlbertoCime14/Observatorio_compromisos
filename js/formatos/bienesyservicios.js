var id_programa;
$(document).ready(function () {
    /**Inicializar variables**/
    url = $("#url").val();
    recuperar_unidad_medida();
   id_programa=$("#id_programa").val().trim();

    listar_bienes(id_programa);


});

function recuperar_unidad_medida() {
    /*Url estatica*/

    var route = "acciones/bienesyservicios/listar_unidad_medida";
    $.ajax({
        type: "GET",
        url: url + route,
        data: "ok=ok",
        success: function (data) {
            value = 0;
            JSON.parse(data, function (k, v) {
                if (isNaN(v) === true) {
                    if (typeof v === 'object') {
                    } else {
                        //texto
                        var o = new Option("option text", value);
                        $("#cbo_unidad_medida").append(o);
                        $(o).html(v);
                    }
                } else {
                    //numero
                    value = v;
                }

            });
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);

        }
    });
}

$("#create_service").click(function () {
    var nombre = $("#Nombre_bien").val().trim();
    var descripcion_bien = $("#descripcion_bien").val().trim();
    var criterios_calidad = $("#criterios_calidad").val().trim();
    var criterios_entrega = $("#criterios_entrega").val().trim();
    var unidad_medida = $("#cbo_unidad_medida").val().trim();
    var id_programa=$("#id_programa").val().trim();

    if (nombre == "" || descripcion_bien == "" || criterios_calidad == "" || criterios_entrega == "" || unidad_medida <= 0) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    } else {

        /**Seguir aqui la insercion de datos**/
        var recurso = "acciones/bienesyservicios/agregar";
        var data_recurso = "vNombreServicio=" + nombre + "&tDescripcion=" + descripcion_bien + "&tCriteriosCalidad=" + criterios_calidad + "&tCriteriosEntregas=" + criterios_entrega + "&iIdUnidadMedida=" + unidad_medida + "&iIdPrograma="+id_programa;
        //+"&iIdPrograma="+id_programa

        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {
                if (data == "correcto") {
                    var nombre = $("#Nombre_bien").val("");
                    var descripcion_bien = $("#descripcion_bien").val("");
                    var criterios_calidad = $("#criterios_calidad").val("");
                    var criterios_entrega = $("#criterios_entrega").val("");
                    var unidad_medida = $("#cbo_unidad_medida").val(0);
                    listar_bienes(id_programa);
                    new PNotify({
                        title: 'Servicio agregado correctamente',
                        type: 'success',
                    })
                } else {
                    new PNotify({
                        title: 'Error al insertar los datos, comuníquese con soporte',
                        type: 'error',
                    })
                }
            }
        });
    }
});

function listar_bienes(id_programa) {

    var recurso = "acciones/bienesyservicios/listar/"+id_programa;
    $.ajax({
        type: "GET",
        url: url + recurso,
        success: function (data) {
            $("#listado_bienes_body").empty();
            $("#listado_bienes_body").append(data);

        }
    });
}

function EliminarServicio(iIdBienServicio) {

    new PNotify({
        title: 'Eliminar',
        text: '¿Esta seguro de eliminar este Servicio?',
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
        stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
    }).get().on('pnotify.confirm', function () {
        var recurso = "acciones/bienesyservicios/eliminar";
        var data_recurso = "iIdBienServicio=" + iIdBienServicio;

        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {
                if (data == "correcto") {
                    listar_bienes(id_programa);
                    new PNotify({
                        title: 'Servicio eliminado correctamente',
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
    }).on('pnotify.cancel', function () {
        //  alert('Cancelado');
    })
}

function ActualizarServicio(iIdServicio) {

    var IdServicio = iIdServicio;
    var nombre = $("#vNombreServicio" + iIdServicio).val().trim();
    var descripcion_bien = $("#DescripcionServicio_" + iIdServicio).val().trim();
    var criterios_calidad = $("#criterios_calidad_" + iIdServicio).val().trim();
    var criterios_entrega = $("#criterios_entregas_" + iIdServicio).val().trim();
    var unidad_medida = $("#cbo_unidad_" + iIdServicio).val().trim();


    if (nombre == "" || descripcion_bien == "" || criterios_calidad == "" || criterios_entrega == "" || unidad_medida <= 0) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    } else {

        /**Seguir aqui la insercion de datos**/
        var recurso = "acciones/bienesyservicios/actualizar/"+id_programa;
        var data_recurso = "iIdBienServicio=" + IdServicio + "&vNombreServicio=" + nombre + "&tDescripcion=" + descripcion_bien + "&tCriteriosCalidad=" + criterios_calidad + "&tCriteriosEntregas=" + criterios_entrega + "&iIdUnidadMedida=" + unidad_medida;
        //+"&iIdPrograma="+id_programa

        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {

                if (data == "correcto") {

                    listar_bienes(id_programa);

                    new PNotify({
                        title: 'Servicio actualizado correctamente',
                        type: 'success',
                    })
                } else {
                    new PNotify({
                        title: 'No hay cambios detectados en la actualización de su servicio',
                        type: 'info',
                    })
                }
            }
        });
    }

}



