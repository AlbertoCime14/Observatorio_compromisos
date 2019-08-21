var id_programa;
$(document).ready(function () {
    /**Inicializar variables**/
    url = $("#url").val();

    id_programa = $("#id_programa").val().trim();

    listar_poblacion(id_programa);


});

function recuperar_grupo_Edad() {
    var route = "acciones/poblaciones/listar_grupo_edad";
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

                        $("#cbo_edad_1").append(o);
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

//esta funcion recibe un parametro que al final lo complemento
function listar_poblacion(id_programa) {

    var recurso = "acciones/poblaciones/listar/" + id_programa;
    $.ajax({
        type: "GET",
        url: url + recurso,
        success: function (data) {

            $("#listado_bienes_body").empty();
            $("#listado_bienes_body").append(data);

        }
    });
}


function AgregarPoblacion(id_definicion) {

    var DescripcionPoblacion_ = $("#DescripcionPoblacion_" + id_definicion).val().trim();
    //var total = $("#total_"+id_definicion).val().trim();

    var hombres_ = $("#hombres_" + id_definicion).val().trim();
    var mujeres_ = $("#mujeres_" + id_definicion).val().trim();
    var indigenas = $("#indigenas" + id_definicion).val().trim();
    var grupo_edad = $("#cbo_edad_" + id_definicion).val().trim();


    if (DescripcionPoblacion_ == "" || hombres_ == "" || mujeres_ == "" || indigenas == "" || grupo_edad <= 0) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    } else {

        /**Seguir aqui la insercion de datos**/
        var recurso = "acciones/poblaciones/agregar";
        var data_recurso = {
            Descripcion: DescripcionPoblacion_,
            num_hombres: hombres_,
            num_mujeres: mujeres_,
            num_indigenas: indigenas,
            edad: grupo_edad,
            idPrograma: id_programa,
            definicion: id_definicion
        };
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
                    listar_poblacion(id_programa);
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
}

/* Sumar dos números. */
function sumar(valor, id_definicion) {
    var total = 0;
    valor = parseInt(valor); // Convertir el valor a un entero (número).

    total = document.getElementById('total_' + id_definicion).innerHTML;

    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;

    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));

    // Colocar el resultado de la suma en el control "span".
    document.getElementById('total_' + id_definicion).innerHTML = total;
}

function Eliminar_cuantificacion(id_cuantificacion) {
    new PNotify({
        title: 'Eliminar',
        text: '¿Seguro desea eliminar esta población ?',
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
        var recurso = "acciones/poblaciones/eliminar";

        $.ajax({
            type: "POST",
            url: url + recurso,
            data: {iIdCuantificacion: id_cuantificacion},
            success: function (data) {
                if (data == "correcto") {
                    listar_poblacion(id_programa);
                    //$('#btnBorrar' + id).removeAttr("onclick");
                    //$('#btnBorrar' + id).attr("disabled", true);


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
    }).on('pnotify.cancel', function () {
        //  alert('Cancelado');
    })
}

function ActualizarCuantificacio(id_cuantificacion, id_definicion) {

    var DescripcionPoblacion_ = $("#DescripcionPoblacion_" + id_definicion).val().trim();
    //var total = $("#total_"+id_definicion).val().trim();

    var hombres_ = $("#hombres_" + id_definicion).val().trim();
    var mujeres_ = $("#mujeres_" + id_definicion).val().trim();
    var indigenas = $("#indigenas" + id_definicion).val().trim();
    var grupo_edad = $("#cbo_edad_" + id_definicion).val().trim();


    //queda pendiente el apartado de especificacion de otro, en caso de que se seleccione en grupo edad la opcion de "otro"


    if (DescripcionPoblacion_ == "" || hombres_ == "" || mujeres_ == "" || indigenas == "" || grupo_edad <= 0) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    }
    else {
        var route = "acciones/poblaciones/actualizar";
        var data_recurso = {
            Descripcion: DescripcionPoblacion_,
            num_hombres: hombres_,
            num_mujeres: mujeres_,
            num_indigenas: indigenas,
            edad: grupo_edad,
            id_cuantificacion: id_cuantificacion,

        };
        $.ajax({
            type: "POST",
            url: url + route,
            data: data_recurso ,
            success: function(data) {
                if (data == "correcto") {
                    listar_poblacion(id_programa);
                    new PNotify({
                        title: 'Registro modificado',
                        type: 'success',
                    });
                } else {
                    listar_poblacion(id_programa);
                    new PNotify({
                        title: 'Sin cambios realizados',
                        type: 'error',
                    })
                }
            }
        });
    }
}