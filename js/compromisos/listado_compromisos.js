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
			console.log(typeof data);
			//console.log(html);
			$("#listado_cumplidos").html(html);

		}
	});
}








