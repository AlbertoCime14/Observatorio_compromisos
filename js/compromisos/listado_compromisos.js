$(document).ready(function () {
	/**Inicializar variables**/

	//recuperar_unidad_medida();
	url = $("#url").val();
	//listar_compromisos();
	main();


});

function main() {
	mostrarDatos("",1);


	$("input[name=busqueda]").keyup(function () {
		textobuscar = $(this).val();
		//valoroption = $("#cantidad").val();
		mostrarDatos(textobuscar,1);
	});
	$("input[name=busqueda_numero]").keyup(function () {
		texto = $(this).val();
		conversion_texto=parseInt(texto);
		//valoroption = $("#cantidad").val();

		mostrarDatos(conversion_texto,1);

	});

	$("body").on("click", ".pagination li a", function (e) {
		e.preventDefault();
		valorhref = $(this).attr("href");
		valorBuscar = $("input[name=busqueda]").val();
		mostrarDatos(valorBuscar, valorhref);
	});

	/*$("#cantidad").change(function () {
		valoroption = $(this).val();
		valorBuscar = $("input[name=busqueda]").val();
		mostrarDatos(valorBuscar, 1, valoroption);
	});*/
}

function mostrarDatos(valorBuscar,pagina) {
	var recurso;

	if(typeof(valorBuscar) == "string" ){
		recurso = "acciones/compromisos/mostrar";
		$.ajax({
			url: url + recurso,
			type: "POST",
			data: {buscar: valorBuscar,nropagina:pagina},
			dataType: "json",
			success: function (response) {
				console.log(response);
				filas = "";
				var progress_color = ['progress-bar-primario', 'progress-bar-secundario', 'progress-bar-terciario', 'progress-bar-cuaternario'];
				var colors = ['#00A36A', '#212743', '#694688', '#6CBB37'];
				var i = 0;
				$.each(response.compromisos, function (key, item) {
					filas += `<div class="col-sm-6 col-lg-3 isotope-item brands" ">
								<div class="portfolio-item">
										<a href="descripcion/${item.iIdCompromiso}/${item.iIdDependencia}">
											<span class="thumb-info thumb-info-lighten border-radius-0">
												<span class="thumb-info-wrapper border-radius-0">
														<img src="../img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
														
														<span class="thumb-info-title" style="opacity: 0.7 !important;">
															<span style="font-size: 40px !important;text-align: center !important;" class="thumb-info-inner">${item.iNumero}</span>
															<span style="background-color: ${colors[i]} !important;" class="thumb-info-type">Compromiso</span>
														</span>
												</span>
											</span>
											<div class="progress mb-2" style="margin-top: 7px">
												<div class="progress-bar ${progress_color[i]}" role="progressbar" aria-valuenow="${item.dPorcentajeAvance}" aria-valuemin="0" aria-valuemax="100" style="width: ${item.dPorcentajeAvance}%;">
												${item.dPorcentajeAvance}
												</div>
											</div>
											<p>${item.vCompromiso} </p>
										</a>
								</div>
						</div>`;
					if(i >=3){
						i=0;
					}else{
						i++;
					}

				});
				$("#listado_cumplidos").html(filas);

				linkseleccionado = Number(pagina);
				//total registros
				totalregistros = response.totalregistros;
				//cantidad de registros por pagina
				cantidadregistros = response.cantidad;

				numerolinks = Math.ceil(totalregistros / cantidadregistros);
				paginador = "<ul class='pagination float-right'>";

				if(linkseleccionado>1)
				{
					paginador+="<li class='page-item'><a class='page-link'  href='1'>&laquo;</a></li>";
					paginador+="<li class='page-item'><a class='page-link' href='"+(linkseleccionado-1)+"' '>&lsaquo;</a></li>";

				}
				else
				{
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&laquo;</a></li>";
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&lsaquo;</a></li>";
				}
				//muestro de los enlaces
				//cantidad de link hacia atras y adelante
				cant = 2;
				//inicio de donde se va a mostrar los links
				pagInicio = (linkseleccionado > cant) ? (linkseleccionado - cant) : 1;
				//condicion en la cual establecemos el fin de los links
				if (numerolinks > cant)
				{
					//conocer los links que hay entre el seleccionado y el final
					pagRestantes = numerolinks - linkseleccionado;
					//defino el fin de los links
					pagFin = (pagRestantes > cant) ? (linkseleccionado + cant) :numerolinks;
				}
				else
				{
					pagFin = numerolinks;
				}
				for (var i = 1; i <= numerolinks; i++) {
					if (i == linkseleccionado){
						paginador += `<li class="page-item active"><a class="page-link" href="javascript:void(0)">${i}</a></li>`;
					}else{
						paginador += `<li class="page-item"><a class="page-link" href="${i}">${i}</a></li>`;
					}



				}
				//condicion para mostrar el boton sigueinte y ultimo
				if(linkseleccionado<numerolinks)
				{
					paginador+="<li class='page-item'><a class='page-link' href='"+(linkseleccionado+1)+"' >&rsaquo;</a></li>";
					paginador+="<li class='page-item'><a class='page-link' href='"+numerolinks+"'>&raquo;</a></li>";

				}
				else
				{
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&rsaquo;</a></li>";
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&raquo;</a></li>";
				}

				paginador += "</ul>";
				$(".pagination").html(paginador);

			}
		});
	}else{
		recurso = "acciones/compromisos/mostrar_number";
		$.ajax({
			url: url + recurso,
			type: "POST",
			data: {buscar: valorBuscar,nropagina:pagina},
			dataType: "json",
			success: function (response) {
				console.log(response);
				filas = "";
				var progress_color = ['progress-bar-primario', 'progress-bar-secundario', 'progress-bar-terciario', 'progress-bar-cuaternario'];
				var colors = ['#00A36A', '#212743', '#694688', '#6CBB37'];
				var i = 0;
				$.each(response.compromisos, function (key, item) {
					filas += `<div class="col-sm-6 col-lg-3 isotope-item brands" ">
								<div class="portfolio-item">
										<a href="descripcion/${item.iIdCompromiso}/${item.iIdDependencia}">
											<span class="thumb-info thumb-info-lighten border-radius-0">
												<span class="thumb-info-wrapper border-radius-0">
														<img src="../img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
														
														<span class="thumb-info-title" style="opacity: 0.7 !important;">
															<span style="font-size: 40px !important;text-align: center !important;" class="thumb-info-inner">${item.iNumero}</span>
															<span style="background-color: ${colors[i]} !important;" class="thumb-info-type">Compromiso</span>
														</span>
												</span>
											</span>
											<div class="progress mb-2" style="margin-top: 7px">
												<div class="progress-bar ${progress_color[i]}" role="progressbar" aria-valuenow="${item.dPorcentajeAvance}" aria-valuemin="0" aria-valuemax="100" style="width: ${item.dPorcentajeAvance}%;">
												${item.dPorcentajeAvance}
												</div>
											</div>
											<p>${item.vCompromiso} </p>
										</a>
								</div>
						</div>`;
					if(i >=3){
						i=0;
					}else{
						i++;
					}

				});
				$("#listado_cumplidos").html(filas);

				linkseleccionado = Number(pagina);
				//total registros
				totalregistros = response.totalregistros;
				//cantidad de registros por pagina
				cantidadregistros = response.cantidad;

				numerolinks = Math.ceil(totalregistros / cantidadregistros);
				paginador = "<ul class='pagination float-right'>";

				if(linkseleccionado>1)
				{
					paginador+="<li class='page-item'><a class='page-link'  href='1'>&laquo;</a></li>";
					paginador+="<li class='page-item'><a class='page-link' href='"+(linkseleccionado-1)+"' '>&lsaquo;</a></li>";

				}
				else
				{
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&laquo;</a></li>";
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&lsaquo;</a></li>";
				}
				//muestro de los enlaces
				//cantidad de link hacia atras y adelante
				cant = 2;
				//inicio de donde se va a mostrar los links
				pagInicio = (linkseleccionado > cant) ? (linkseleccionado - cant) : 1;
				//condicion en la cual establecemos el fin de los links
				if (numerolinks > cant)
				{
					//conocer los links que hay entre el seleccionado y el final
					pagRestantes = numerolinks - linkseleccionado;
					//defino el fin de los links
					pagFin = (pagRestantes > cant) ? (linkseleccionado + cant) :numerolinks;
				}
				else
				{
					pagFin = numerolinks;
				}
				for (var i = 1; i <= numerolinks; i++) {
					if (i == linkseleccionado){
						paginador += `<li class="page-item active"><a class="page-link" href="javascript:void(0)">${i}</a></li>`;
					}else{
						paginador += `<li class="page-item"><a class="page-link" href="${i}">${i}</a></li>`;
					}



				}
				//condicion para mostrar el boton sigueinte y ultimo
				if(linkseleccionado<numerolinks)
				{
					paginador+="<li class='page-item'><a class='page-link' href='"+(linkseleccionado+1)+"' >&rsaquo;</a></li>";
					paginador+="<li class='page-item'><a class='page-link' href='"+numerolinks+"'>&raquo;</a></li>";

				}
				else
				{
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&rsaquo;</a></li>";
					paginador+="<li class='page-item disabled'><a class='page-link' href='#'>&raquo;</a></li>";
				}

				paginador += "</ul>";
				$(".pagination").html(paginador);

			}
		});
	}


}

function listar_compromisos() {

	var recurso = "acciones/compromisos/listar";
	$.ajax({
		type: "GET",
		url: url + recurso,
		success: function (data) {
			//$("#listado_cumplidos").empty();
			var html = data;

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
			var html = data;

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
			var html = data;

			//console.log(html);
			$("#listado_cumplidos").html(html);

		}
	});
}







