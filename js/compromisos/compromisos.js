$(document).ready(function () {
	/**Inicializar variables**/

	//recuperar_unidad_medida();


	listar_compromisos_2();


});


function listar_compromisos_2() {

	var recurso = "acciones/compromisos/listar_4";
	$.ajax({
		type: "GET",
		url: url + recurso,
		success: function (data) {
			$("#listado_bienes_body").empty();
			$("#listado_bienes_body").append(data);

		}
	});
}







