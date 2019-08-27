$(document).ready(function () {
	/**Inicializar variables**/

	//recuperar_unidad_medida();
	url = $("#url").val();
	listar_compromisos();



});


function listar_compromisos() {

	var recurso = "acciones/compromisos/listar";
	$.ajax({
		type: "GET",
		url: url + recurso,
		success: function (data) {
			//$("#listado_cumplidos").empty();
			var html=data;

			//console.log(html);
			$("#listado_cumplidos").html(html);

		}
	});
}
function listar_procesos() {
	var recurso = "acciones/compromisos/listarP";
	$.ajax({
		type: "GET",
		url: url + recurso,
		success: function (data) {
			//$("#listado_cumplidos").empty();
			var html=data;

			//console.log(html);
			$("#listado_cumplidos").html(html);

		}
	});
}
function listar_procesosI() {
	var recurso = "acciones/compromisos/listarI";
	$.ajax({
		type: "GET",
		url: url + recurso,
		success: function (data) {
			//$("#listado_cumplidos").empty();
			var html=data;

			//console.log(html);
			$("#listado_cumplidos").html(html);

		}
	});
}







