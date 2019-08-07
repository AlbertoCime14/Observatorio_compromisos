<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Programas Presupuestales </title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<!-- global css -->
		<link type="text/css" href="<?= base_url(); ?>css/app.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/custom.css">
		<link rel="stylesheet" href="<?= base_url(); ?>css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
		<!-- end of global css -->
		<!--page level css -->
		<link rel="stylesheet" href="<?= base_url(); ?>css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
		<link href="<?= base_url(); ?>vendors/hover/css/hover-min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url(); ?>vendors/laddabootstrap/css/ladda-themeless.min.css">
		<link href="<?= base_url(); ?>css/buttons_sass.css" rel="stylesheet">
		<link href="<?= base_url(); ?>css/advbuttons.css" rel="stylesheet">
		<link href="<?= base_url(); ?>vendors/iCheck/css/all.css" rel="stylesheet"/>
		<link rel="stylesheet" href="<?= base_url(); ?>vendors/datetime/css/jquery.datetimepicker.css">
		<link href="<?= base_url(); ?>vendors/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet"
		type="text/css"/>
		<link rel="stylesheet" href="<?= base_url(); ?>css/custom_css/realtime_form.css">
		<link href="<?= base_url(); ?>vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/complex_forms.css">
        <!--Notifiaciones-->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/custom.css">
		<link rel="stylesheet" href="<?=base_url();?>css/custom_css/skins/skin-default.css" type="text/css" id="skin"/>
		<link rel="stylesheet" href="<?=base_url();?>vendors/animate/animate.min.css"/>
		<link rel="stylesheet" href="<?=base_url();?>vendors/pnotify/css/pnotify.css">
		<link href="<?=base_url();?>vendors/pnotify/css/pnotify.brighttheme.css" rel="stylesheet" type="text/css"/>
		<link href="<?=base_url();?>vendors/pnotify/css/pnotify.buttons.css" rel="stylesheet" type="text/css"/>
		<link href="<?=base_url();?>vendors/pnotify/css/pnotify.mobile.css" rel="stylesheet" type="text/css"/>
		<link href="<?=base_url();?>vendors/pnotify/css/pnotify.history.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/custom_css/toastr_notificatons.css">
		</head>
	<!--Head-->
	<body class="skin-default">
		<div class="preloader">
			<div class="loader_img"><img src="<?= base_url(); ?>img/loader.gif" alt="loading..." height="64" width="64"></div>
		</div>
		<!-- header logo: style can be found in header-->
		<header class="header">
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="<?= base_url(); ?>" class="logo">
					<!-- Add the class icon to your logo image or logo icon to add the margining -->
					<img src="<?= base_url(); ?>img/logo_seplan.png" alt="logo" style="max-width: 92%;"/>
				</a>
				<!-- Header Navbar: style can be found in header-->
				<!-- Sidebar toggle button-->
				<!-- Sidebar toggle button-->
				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> <i
                                class="fa fa-fw ti-email black"></i>
								<span class="label label-success">2</span>
							</a>
							<ul class="dropdown-menu dropdown-messages table-striped">
								<li class="dropdown-title">New Messages</li>
								<li>
									<a href="" class="message striped-col">
										<img class="message-image img-circle" src="<?= base_url(); ?>img/authors/avatar7.jpg"
										alt="avatar-image">
										<div class="message-body"><strong>Ernest Kerry</strong>
											<br>
											Can we Meet?
											<br>
											<small>Just Now</small>
											<span class="label label-success label-mini msg-lable">New</span>
										</div>
									</a>
								</li>
								<li>
									<a href="" class="message">
										<img class="message-image img-circle" src="<?= base_url(); ?>img/authors/avatar6.jpg"
										alt="avatar-image">
										<div class="message-body"><strong>John</strong>
											<br>
											Dont forgot to call...
											<br>
											<small>5 minutes ago</small>
											<span class="label label-success label-mini msg-lable">New</span>
										</div>
									</a>
								</li>
								<li>
									<a href="" class="message striped-col">
										<img class="message-image img-circle" src="<?= base_url(); ?>img/authors/avatar5.jpg"
										alt="avatar-image">
										<div class="message-body">
											<strong>Wilton Zeph</strong>
											<br>
											If there is anything else &hellip;
											<br>
											<small>14/10/2014 1:31 pm</small>
										</div>
									</a>
								</li>
								<li>
									<a href="" class="message">
										<img class="message-image img-circle" src="<?= base_url(); ?>img/authors/avatar1.jpg"
										alt="avatar-image">
										<div class="message-body">
											<strong>Jenny Kerry</strong>
											<br>
											Let me know when you free
											<br>
											<small>5 days ago</small>
										</div>
									</a>
								</li>
								<li>
									<a href="" class="message striped-col">
										<img class="message-image img-circle" src="<?= base_url(); ?>img/authors/avatar.jpg"
										alt="avatar-image">
										<div class="message-body">
											<strong>Tony</strong>
											<br>
											Let me know when you free
											<br>
											<small>5 days ago</small>
										</div>
									</a>
								</li>
								<li class="dropdown-footer"><a href="javascript:void(0)">View All messages</a></li>
							</ul>
						</li>
						<!--rightside toggle-->
						<li>
							<a href="javascript:void(0)" class="dropdown-toggle toggle-right">
								<i class="fa fa-fw ti-view-list black"></i>
								<span class="label label-danger">9</span>
							</a>
						</li>
						<!-- User Account: style can be found in dropdown-->
						<li class="dropdown user user-menu">
							<a href="javascript:void(0)" class="dropdown-toggle padding-user" data-toggle="dropdown">
								<img src="<?= base_url(); ?>img/authors/avatar1.jpg" width="35"
								class="img-circle img-responsive pull-left"
								height="35" alt="User Image">
								<div class="riot">
									<div>
										SEPLAN
										<span>
											<i class="caret"></i>
										</span>
									</div>
								</div>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?= base_url(); ?>img/authors/avatar1.jpg" class="img-circle" alt="User Image">
									<p> SEPLAN</p>
								</li>
								<!-- Menu Body -->
								<li class="p-t-3">
									<a href="user_profile.html">
										<i class="fa fa-fw ti-user"></i> Mi cuenta
									</a>
								</li>
								<li role="presentation"></li>
								<li>
									<a href="edit_user.html">
										<i class="fa fa-fw ti-settings"></i> Configuración
									</a>
								</li>
								<li role="presentation" class="divider"></li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="login.html">
											<i class="fa fa-fw ti-shift-right"></i>
											Cerrar sesión
										</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="right-side strech">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Programas presupuestales</h1>
					<!-- <ol class="breadcrumb">
						<li>
						<a href="index.html">
						<i class="fa fa-fw ti-home"></i> Dashboard
						</a>
						</li>
						<li> Pages</li>
						<li class="active">
						<a href="blank.html">Blank</a>
						</li>
						</ol>
					-->
				</section>
				<!-- Main content -->
				<section class="content">
					<!---Aqui va el contenido de la pagina :v-->
					<div class="row">
						<sesion >
							<div>
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">
											<i class=""></i> Nuevo programa presupuestal
										</h3>
									</div>
									<div class="panel-body">
										<div class="col-md-7" >
											<input id="nombreplan" type="text" class="form-control" placeholder="Escriba un nuevo plan presupuestal">
										</div>
										<div class="form-inline">
											<div class="form-group col-md-3">
												<label>Tipo de programa</label>
												<select id="tipoprograma" class="form-control">
												</select>
											</div>
										</div>
										<div class="col-md-2" >
											<button id="enviarprograma" type="button" class="btn btn-labeled btn-success">
												<span class="btn-label">
													<i class="glyphicon glyphicon-ok"></i>
												</span> Crear
											</button>
										</div>
										<div class="col-md-12">
											<label>Descipción</label>
											<textarea id="descripcionprograma" class="form-control" placeholder="Describe brevemente el programa"></textarea>
										</div>
									</div>
								</div>
							</div>
						</sesion>
						<br><br>
						<div class="row">
							<div class="col-md-12">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">
											<i class=""></i>Listado programas presupuestales
										</h3>
									</div>
									<div class="panel-body">
										<table class="table table-striped table-bordered" id="listado_programas">
											<thead>
												<tr>
													<th>Nombre del programa</th>
													<th>Opciones</th>
												</tr>
											</thead>
											<tbody id="listado_programas_body">
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- /.content -->
				</aside>
				<!-- /.right-side -->
			</div>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.animate.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.buttons.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.confirm.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.nonblock.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.mobile.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.desktop.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.history.js"></script>
			<script type="text/javascript" src="<?=base_url();?>vendors/pnotify/js/pnotify.callbacks.js"></script>
			<script src="<?=base_url();?>js/custom_js/notifications.js"></script>
			<script  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			crossorigin="anonymous"></script>
		<script src="<?=base_url();?>js/formatos/formatoprincipal.js"></script>		