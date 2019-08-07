<!DOCTYPE html>
<html>

<head>
    <title>::Iniciar Sesión::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=base_url();?>img/logo_seplan.png"/>
    <!-- Bootstrap -->
    <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="<?=base_url();?>vendors/themify/css/themify-icons.css" rel="stylesheet"/>
    <link href="<?=base_url();?>vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="<?=base_url();?>vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="<?=base_url();?>css/login.css" rel="stylesheet">
    <!--end page level css-->
</head>

<body id="sign-in">
<div class="preloader">
    <div class="loader_img"><img src="<?=base_url();?>img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-form">
            <div class="panel-header">
                <h2 class="text-center">
                    <img src="<?=base_url();?>img/logo_seplan.png" alt="Logo" height="64" width="300">
                </h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form action="index.html" id="authentication" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="sr-only">Nombre de usuario</label>
                                <input type="text" class="form-control  form-control-lg" id="email" 
                                       placeholder="Nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Contraseña</label>
                                <input type="password" class="form-control form-control-lg"
                                       name="password" placeholder="Contraseña">
                            </div>
                         
                            <div class="form-group">
                                <input type="submit" value="Iniciar sesión" class="btn btn-primary btn-block"/>
                            </div>
                                                  </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="<?=base_url();?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>js/bootstrap.min.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="<?=base_url();?>text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="<?=base_url();?>vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom_js/login.js"></script>
<!-- end of page level js -->
</body>

</html>
