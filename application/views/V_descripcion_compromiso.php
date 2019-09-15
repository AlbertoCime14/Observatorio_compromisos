<div class="page-header page-header-modern ">


	<div class="col-md-12 ">
		<ul class="breadcrumb d-block text-center " style="color: white !important;" data-appear-animation="fadeIn"
			data-appear-animation-delay="300">
			<li><a style="color:white !important;" href="<?=base_url()?>control_pagina/index">Inicio</a></li>
			<li><a style="color:white !important;" href="<?=base_url()?>compromisos/listar">Compromisos</a></li>
		</ul>
	</div>
	<div class="row align-items-center" style="text-align: center">
		<div class="col-md-12 align-self-center p-static order-2 text-center">
			<?php
			foreach ($descripcion as $key) {
				echo '<h1><strong>Compromiso ' . $key['iNumero'] . ' </strong></h1>';
			}


			?>

		</div>
	</div>
</div>

<div role="main" class="main shop py-4">

	<div class="container">

		<div class="row">
			<div class="col-lg-6">

				<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1}">
					<?php

					if($imagenes_portada != null){


						foreach ($imagenes_portada as $key) {
							echo '<div>
								<img style="height: 430px" alt="" class="img-fluid" src="' . base_url() . 'archivos/documentosImages/'.$key['vEvidencia'].'">
							</div>';

						}
					}else{

						echo '<label style="margin-top: 120px; margin-left: 120px;font-size: 22px"><strong>Sin imágenes disponibles </strong></label>';
					}

					?>
				</div>


			</div>

			<div class="col-lg-6">

				<div class="summary entry-summary">


					<?php
					foreach ($descripcion as $key) {
						echo '<h1 style="font-size: 30px !important;" class="mb-0 font-weight-bold text-7" >Compromiso ' . $key['iNumero'] . '</h1>';
					}


					?>
					<div class="pb-0 clearfix">
						<div title="Rated 3 out of 5" class="float-left">
							<input type="text" class="d-none" value="3" title="" data-plugin-star-rating
								   data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
						</div>


					</div>


					<?php
					foreach ($descripcion as $key) {
						echo ' <p class="mb-4" style="font-size: 16px !important;" >' . $key['vCompromiso'] . ' </p>';
					}


					?>

					<?php
					foreach ($responsable as $key) {


						echo '<strong style="font-size: 16px" class="text-color-primary">Responsable:</strong> <label style="font-size: 16px"> ' . $key['vDependencia'] . '</label>';
					}


					?>
					<hr style="background: #777 !important;margin-bottom: 3rem!important;margin-top: 0px!important;      margin: 7px 0 !important; margin-top: 1rem !important; border: 0 !important; border-top: 0px solid rgba(0, 0, 0, 0.1) !important;">
					<strong style="font-size: 16px" class="text-color-primary">Participantes(s):</strong>
					<?php
					if ($participantes != null) {
						echo '<ul>';
						foreach ($participantes as $key) {
							echo '<li style="font-size: 16px"> ' . $key['vDependencia'] . '</li>';
						}
						echo '</ul>';
					} else {
						echo '<label style="font-size: 16px">Sin datos disponibles </label>';
					}
					?>

					<hr style="background: #777 !important;margin-bottom: 3rem!important;margin-top: 0px!important;      margin: 7px 0 !important; margin-top: 1rem !important; border: 0 !important; border-top: 0px solid rgba(0, 0, 0, 0.1) !important;">
					<strong style="font-size: 16px" class="text-color-primary">Ficha técnica:</strong>
					<i class="fas fa-file-pdf" style="font-size: 25px;">

					</i>
					<a class=" text-color-primary" style="font-size: 16px" download=""
					   href="https://www.anerbarrena.com/demos/2016/014-audio-helicoptero.mp3">Enlace para descargar la
						ficha técnica</a>


				</div>


			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="tabs tabs-product mb-2">
					<ul class="nav nav-tabs">
						<li class="nav-item active"><a class="nav-link py-3 px-4" href="#productDescription"
													   data-toggle="tab">Metas de cumplimiento</a></li>
						<li class="nav-item"><a class="nav-link py-3 px-4" href="#productInfo" data-toggle="tab">Evidencia</a>
						</li>

					</ul>
					<div class="tab-content p-0">
						<div class="tab-pane p-4 active" id="productDescription">


						</div>
						<div class="tab-pane p-4" id="productInfo">
							<div class="col-lg-12 mb-4 mb-lg-0">


								<div class="accordion accordion-modern" id="accordion10">
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												   data-toggle="collapse" data-parent="#accordion10"
												   href="#collapse10One" aria-expanded="false">
													<i class="fas fa-file-pdf text-color-primary"></i> Documentos
												</a>
											</h4>
										</div>
										<div id="collapse10One" class="collapse" style="">
											<div class="card-body">
												<strong style="font-size: 14px "
														class="text-color-primary">Documento:</strong>
												<i class="fas fa-file-pdf" style="font-size: 25px;">

												</i>
												<a class=" text-color-primary" style="font-size: 14px" download=""
												   href="https://www.anerbarrena.com/demos/2016/014-audio-helicoptero.mp3">Enlace
													de descarga</a>
												<br>
												<strong style="font-size: 14px"
														class="text-color-primary">Documento:</strong>
												<i class="fas fa-file-pdf" style="font-size: 25px;">

												</i>
												<a class=" text-color-primary" style="font-size: 14px" download=""
												   href="https://www.anerbarrena.com/demos/2016/014-audio-helicoptero.mp3">Enlace
													de descarga</a>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												   data-toggle="collapse" data-parent="#accordion10"
												   href="#collapse10Two" aria-expanded="false">
													<i class="fas fa-image text-color-primary"></i> Fotos
												</a>
											</h4>
										</div>
										<div id="collapse10Two" class="collapse" style="">
											<div class="card-body">
												<div
													class="owl-carousel owl-theme stage-margin owl-loaded owl-drag owl-carousel-init"
													data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"
													style="height: auto;">
													<div class="owl-stage-outer">
														<div class="owl-stage"
															 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1814px; padding-left: 40px; padding-right: 40px;">
															<div class="owl-item active"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<<?= base_url(); ?> alt="" class="img-fluid rounded"
																	src="<?= base_url(); ?>img/projects/project-5.jpg">
																</div>
															</div>
															<div class="owl-item active"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-6.jpg">
																</div>
															</div>
															<div class="owl-item active"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-7.jpg">
																</div>
															</div>
															<div class="owl-item active"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-1.jpg">
																</div>
															</div>
															<div class="owl-item active"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-2.jpg">
																</div>
															</div>
															<div class="owl-item active"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-3.jpg">
																</div>
															</div>
															<div class="owl-item"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-1.jpg">
																</div>
															</div>
															<div class="owl-item"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-2.jpg">
																</div>
															</div>
															<div class="owl-item"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-3.jpg">
																</div>
															</div>
															<div class="owl-item"
																 style="width: 163.333px; margin-right: 10px;">
																<div>
																	<img alt="" class="img-fluid rounded"
																		 src="<?= base_url(); ?>img/projects/project-4.jpg">
																</div>
															</div>
														</div>
													</div>
													<div class="owl-nav">
														<button type="button" role="presentation"
																class="owl-prev disabled"></button>
														<button type="button" role="presentation"
																class="owl-next"></button>
													</div>
													<div class="owl-dots disabled"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="card card-default">
										<div class="card-header">
											<h4 class="card-title m-0">
												<a class="accordion-toggle text-color-dark font-weight-bold collapsed"
												   data-toggle="collapse" data-parent="#accordion10"
												   href="#collapse10Three" aria-expanded="false">
													<i class="fas fa-film text-color-primary"></i> Videos
												</a>
											</h4>
										</div>
										<div id="collapse10Three" class="collapse" style="">
											<div class="card-body">
												<div class="embed-responsive-borders">
													<div class="embed-responsive embed-responsive-16by9">
														<iframe width="100" height="100" frameborder="0"
																allowfullscreen=""
																src="http://www.youtube.com/embed/l-epKcOA7RQ?showinfo=0&amp;wmode=opaque"></iframe>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>


	</div>

</div>


<input type="hidden" id="id_compromiso" value="<?php echo $this->uri->segment(3);?>">
<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<script src="<?=base_url();?>js/compromisos/descripcion_compromisos.js"></script>
