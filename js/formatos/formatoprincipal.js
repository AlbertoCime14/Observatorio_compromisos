var url = "";
$(document).ready(function () {
    /**Inicializar variables**/
    url = $("#url").val();
	listar_tipoprograma();
    listar_programas();
});

function listar_tipoprograma(){
	var recurso="listar/tipoprograma";
	$.ajax({
        type: "GET",
        url: url + recurso,
        success: function (data) {
          /*   $("#listado_programas_body").empty(); */
            var o = JSON.parse(data);
            var objetos = (Object.values(o['tipoprograma']));
			
			/**Defaul position 0**/
			var obj = new Option("option text", 0 );
                             $("#tipoprograma").append(obj);
                             $(obj).html("Seleccione");
            for (x = 0; x < objetos.length; x++) {
                //aceder al valor especifico
                /* console.log(objetos[x].vNombre); */
				var obj = new Option("option text", objetos[x].iIdTipoPrograma  );
                             $("#tipoprograma").append(obj);
                             $(obj).html(objetos[x].vNombre);
            }
        }
    });
	
}
function eliminarprograma(iIdPrograma) {
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
        stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
    }).get().on('pnotify.confirm', function () {
        var recurso = "eliminar/programa";
        var data_recurso = "iIdPrograma=" + iIdPrograma;
        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {
                if (data == "correcto") {
                    listar_programas();
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

$("#enviarprograma").click(function () {
    var nombre = $("#nombreplan").val().trim();
    var tipoprograma = $("#tipoprograma").val().trim();
    var descripcionprograma = $("#descripcionprograma").val().trim();
    if (nombre == "" || descripcionprograma == "" || tipoprograma <= 0) {
        new PNotify({
            title: 'Por favor llene todos los campos correctamente',
            type: 'error',
        })
    } else {
        /**Seguir aqui la insercion de datos**/
        var recurso = "agregar/programa";
        var data_recurso = "vNombre=" + nombre + "&iIdTipoPrograma=" + tipoprograma + "&tDescripcion=" + descripcionprograma;
        $.ajax({
            type: "POST",
            url: url + recurso,
            data: data_recurso,
            success: function (data) {
                if (data == "correcto") {
                    var nombre = $("#nombreplan").val("");
                    var tipoprograma = $("#tipoprograma").val(0);
                    var descripcionprograma = $("#descripcionprograma").val("");
                    listar_programas();
                    new PNotify({
                        title: 'Agregado',
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
    }
});

function listar_programas() {
    var recurso = "listar/programa";
    $.ajax({
        type: "GET",
        url: url + recurso,
        success: function (data) {
            $("#listado_programas_body").empty();
            var o = JSON.parse(data);
            var objetos = (Object.values(o['programas']));
            for (x = 0; x < objetos.length; x++) {
                //aceder al valor especifico
                /* console.log(objetos[x].vNombre); */
                var nodotabla = '<tr><td style="width: 60%;">' + objetos[x].vNombre + '</td><td><div class="row"><div class="col-md-6" style="text-align:right"><div ><a href="' + url + 'formatos/diagnostico/' + btoa(+objetos[x].iIdPrograma) + '" ><button type="submit" class="btn btn-labeled btn-success" name="idprograma"><span class="btn-label"><i class="glyphicon glyphicon-edit" ></i></span> Editar</button></a></div></div><div class="col-md-6"><button type="button" class="btn btn-labeled btn-danger" onclick="eliminarprograma(' + objetos[x].iIdPrograma + ')"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span> Eliminar</button></div></div></td></tr>';
                $('#listado_programas').find('tbody').append(nodotabla);
                /* $('#listado_programas_body tbody').append(nodotabla); */
            }
        }
    });
}