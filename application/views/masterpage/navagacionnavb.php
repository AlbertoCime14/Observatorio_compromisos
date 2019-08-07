<?php 
$id_programa = $this->uri->segment(3);
if(isset($_SESION['idusuario'])){
		
}else{
       // echo '<script>window.location="'.base_url().'"</script>';
}
?>
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar-->
    <section class="sidebar">
        <div id="menu" role="navigation">
            <!--<div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="javascript:void(0)">
                            <img src="<?= base_url(); ?>img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                SEPLAN
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>-->
            <ul class="navigation">

                <li class="menu-dropdown active">



                    <h3 style="text-align: center">Formatos</h3>
                    <ul class="sub-menu">
                        <li class="<?php echo ($pag == 1) ? 'active' : ''; ?>" id="frm_1">
                            <a href="<?= base_url(); ?>formatos/diagnostico/<?=$id_programa;?>/">
                                <i class="fa fa-fw ti-file"></i>1. Diagnostico
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 2) ? 'active' : ''; ?>" id="frm_2">
                            <a href="<?= base_url(); ?>formatos/arbolproblema/<?=$id_programa;?>/">
                                <i class="fa fa-fw ti-file"></i>2.Árbol problemas 
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 3) ? 'active' : ''; ?>" id="frm_3">
                             <a href="<?= base_url(); ?>formatos/arbolobjetivo/<?=$id_programa;?>/">
                                <i class="fa fa-fw ti-file"></i>3. Arbol objetivo
                            </a>
                        </li>
						          <li class="<?php echo ($pag == 4) ? 'active' : ''; ?>" id="frm_3">
                             <a href="<?= base_url(); ?>formatos/bienesyservicios/<?=$id_programa;?>/">
                                <i class="fa fa-fw ti-file"></i>4. Bienes y servicios
                            </a>
                        </li>
						   <li class="<?php echo ($pag == 5) ? 'active' : ''; ?>" id="frm_3">
                             <a href="<?= base_url(); ?>formatos/poblaciones/<?=$id_programa;?>/">
                                <i class="fa fa-fw ti-file"></i>5. Poblaciones
                            </a>
                        </li>
							   <li class="<?php echo ($pag == 6) ? 'active' : ''; ?>" id="frm_3">
                             <a href="<?= base_url(); ?>formatos/focalizacion/<?=$id_programa;?>/">
                                <i class="fa fa-fw ti-file"></i>6. Focalización de la población objetivo
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- / .navigation -->
        </div>
        <!-- menu -->
    </section>
    <!-- /.sidebar -->
</aside>