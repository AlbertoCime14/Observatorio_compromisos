<?php 
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
                            <a href="<?= base_url(); ?>formatos/frm_1">
                                <i class="fa fa-fw ti-file"></i>1. Documentación de políticas públicas
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 2) ? 'active' : ''; ?>" id="frm_2">
                            <a href="<?= base_url(); ?>formatos/frm_2">
                                <i class="fa fa-fw ti-file"></i>2. Alineación con la planeación del desarrollo
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 3) ? 'active' : ''; ?>" id="frm_3">
                            <a href="<?= base_url(); ?>formatos/frm_3">
                                <i class="fa fa-fw ti-file"></i>3. Vinculación con otros programas
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 4) ? 'active' : ''; ?>" id="frm_4">
                            <a href="<?= base_url(); ?>formatos/frm_4">
                                <i class="fa fa-fw ti-file"></i>4. Identificación de involucrados
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 5) ? 'active' : ''; ?>" id="frm_5">
                            <a href="<?= base_url(); ?>formatos/frm_5">
                                <i class="fa fa-fw ti-file"></i>5. Identificación y cuantificación de la población
                                objetivo
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 6) ? 'active' : ''; ?>" id="frm_6">
                            <a href="<?= base_url(); ?>formatos/frm_6">
                                <i class="fa fa-fw ti-file"></i>6. Cobertura geográfica
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 7) ? 'active' : ''; ?>" id="frm_7">
                            <a href="<?= base_url(); ?>formatos/frm_7">
                                <i class="fa fa-fw ti-file"></i>7. Criterios para la focalización de la población
                                objetivo
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 8) ? 'active' : ''; ?>" id="frm_8">
                            <a href="<?= base_url(); ?>formatos/frm_8">
                                <i class="fa fa-fw ti-file"></i>8. Características de los bienes o servicios del
                                programa
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 9) ? 'active' : ''; ?>" id="frm_9">
                            <a href="<?= base_url(); ?>formatos/frm_9">
                                <i class="fa fa-fw ti-file"></i>9. Coherencia interinstitucional
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 10) ? 'active' : ''; ?>" id="frm_10">
                            <a href="<?= base_url(); ?>formatos/frm_10">
                                <i class="fa fa-fw ti-file"></i>10. Matriz de indicadores para resultados
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 11) ? 'active' : ''; ?>" id="frm_11">
                            <a href="<?= base_url(); ?>formatos/frm_11">
                                <i class="fa fa-fw ti-file"></i>11. Marco de resultados de mediano plazo
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 12) ? 'active' : ''; ?>" id="frm_12">
                            <a href="<?= base_url(); ?>formatos/frm_12">
                                <i class="fa fa-fw ti-file"></i>12. Formato de documentación de indicadores MIR
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 13) ? 'active' : ''; ?>" id="frm_13">
                            <a href="<?= base_url(); ?>formatos/frm_13">
                                <i class="fa fa-fw ti-file"></i>13. Fuentes de información
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 14) ? 'active' : ''; ?>" id="frm_14">
                            <a href="<?= base_url(); ?>formatos/frm_14">
                                <i class="fa fa-fw ti-file"></i>14. Informes de desempeño
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 15) ? 'active' : ''; ?>" id="frm_15">
                            <a href="<?= base_url(); ?>formatos/frm_15">
                                <i class="fa fa-fw ti-file"></i>15. Programación de atención de la población objetivo
                            </a>
                        </li>
                        <li class="<?php echo ($pag == 16) ? 'active' : ''; ?>" id="frm_16">
                            <a href="<?= base_url(); ?>formatos/frm_16">
                                <i class="fa fa-fw ti-file"></i>16. Costeo por componente
                            </a>
                        </li>

                        <li class="<?php echo ($pag == 17) ? 'active' : ''; ?>" id="frm_17">
                            <a href="<?= base_url(); ?>formatos/frm_17">
                                <i class="fa fa-fw ti-file"></i>17. Fuentes de financiamiento
                            </a>
                        </li>

                        <li class="<?php echo ($pag == 18) ? 'active' : ''; ?>" id="frm_17">
                            <a href="<?= base_url(); ?>formatos/frm_18">
                                <i class="fa fa-fw ti-file"></i>18. Justificaci&oacute;n
                            </a>
                        </li>

                        <li class="<?php echo ($pag == 19) ? 'active' : ''; ?>" id="frm_17">
                            <a href="<?= base_url(); ?>formatos/frm_19">
                                <i class="fa fa-fw ti-file"></i>19. Diagn&oacute;stico
                            </a>
                        </li>

                        <li class="<?php echo ($pag == 20) ? 'active' : ''; ?>" id="frm_17">
                            <a href="<?= base_url(); ?>formatos/frm_20">
                                <i class="fa fa-fw ti-file"></i>20. Arbol de Problemas
                            </a>
                        </li>

                        <li class="<?php echo ($pag == 21) ? 'active' : ''; ?>" id="frm_17">
                            <a href="<?= base_url(); ?>formatos/frm_21">
                                <i class="fa fa-fw ti-file"></i>21. Arbol de Objetivos
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