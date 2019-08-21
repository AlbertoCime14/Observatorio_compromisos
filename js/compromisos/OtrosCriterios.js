var id_cuantificacion;
$(document).ready(function () {
    /**Inicializar variables**/
    url = $("#url").val();

    id_cuantificacion = $("#id_cuantificacion").val().trim();
    listar_Criterios();



});

function agregar_criterio() {
    var nombre = $("#nombre_criterio").val().trim();
    var descripcion_criterio = $("#descripcion_criterio").val().trim();
    if (nombre == "" || descripcion_criterio == "" ) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    }
    else {
        /**Seguir aqui la insercion de datos**/
        var recurso = "acciones/criterios/agregar";
        var data = {nombre_criterio:nombre,descripcion:descripcion_criterio,idCuantificacion:id_cuantificacion};


        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data,
            success: function (data) {

                if (data == "correcto") {
                    var nombre = $("#nombre_criterio").val("");
                    var descripcion_criterio = $("#descripcion_criterio").val("");

                    listar_Criterios();
                    new PNotify({
                        title: 'Criterio agregado correctamente',
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
}



function listar_Criterios() {

    var recurso = "acciones/criterios/listar/"+id_cuantificacion;
    $.ajax({
        type: "GET",
        url: url + recurso,
        success: function (data) {

            $("#listado_criterios_body").empty();
            $("#listado_criterios_body").append(data);

        }
    });
}
function EliminarCriterio(id_criterio) {

    new PNotify({
        title: 'Eliminar',
        text: '¿Esta seguro de eliminar este criterio?',
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
        var recurso = "acciones/criterios/eliminar";
        var data_recurso = {idCriterio:id_criterio};

        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {
                if (data == "correcto") {
                    listar_Criterios();
                    new PNotify({
                        title: 'Criterio eliminado correctamente',
                        type: 'success',
                    })
                } else {
                    new PNotify({
                        title: 'Error en la petición, comuniquese con soporte',
                        type: 'error',
                    })
                }
            }
        });
    }).on('pnotify.cancel', function () {
        //  alert('Cancelado');
    })
}

function ActualizarCriterio(id_criterio) {

    var nombre = $("#nombre_criterio"+id_criterio).val().trim();
    var descripcion_criterio = $("#descripcion_criterio"+id_criterio).val().trim();



    if (nombre == "" || descripcion_criterio == "" ) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    } else {

        /**Seguir aqui la insercion de datos**/
        var recurso = "acciones/criterios/actualizar";
        var data_recurso = {nombre_criterio:nombre,descripcion:descripcion_criterio,idcriterio:id_criterio};


        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {

                if (data == "correcto") {

                    listar_Criterios();
                    new PNotify({
                        title: 'Servicio actualizado correctamente',
                        type: 'success',
                    })
                } else {
                    new PNotify({
                        title: 'No hay cambios detectados en la actualización de su criterio',
                        type: 'info',
                    })
                }
            }
        });
    }

}