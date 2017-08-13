<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transparencia Pública</title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-search"></i> <span>Transparência</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <?php
                        include_once './profile.php';
                        ?>
                        <!-- /menu profile quick info -->

                        <br />

                        <?php
                        include_once './sidebar_menu.php';
                        ?>

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
<?php
include_once './top_nav.php';
?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Medias Salariais</h3>
                            </div>

                            
                        </div>

                        <div class="clearfix"></div>



                        <div class="row">





                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Listagem</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Cargo</th>
                                                    <th>Salario</th>
                                                    <th>Margem Acima</th>
                                                    <th>Margem Abaixo</th>
                                                    <th>Admissão</th>
                                                    <th>Media Salarial</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td>MARIA HELENA MENEZES SILVEIRA</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2013</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>ELERIAS GOVANI COUTINHO</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2013</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>BERNARDO CAIRUGA PEREIRA</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2016</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>EDUARDO LOPES AVILA</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>FERNANDO WASZAKI FANTIN</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>JESLEI SALINES DE SOUZA</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>MANUEL SALVADOR DE SOUZA MACHADO</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>OSMAR CARVALHO DIDOLICHE</td>
                                                    <td>Vereador</td>
                                                    <td>R$ 3.361,07</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 3.361,07</td>
                                                </tr>
                                                <tr>
                                                    <td>DARCI RENATO FEITEN</td>
                                                    <td>Vereador Presidente</td>
                                                    <td>R$ 4.355,95</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 4.355,95</td>
                                                </tr>
                                                <tr>
                                                    <td>PAULO ROBERTO LOPES DA ROSA</td>
                                                    <td>Atendente</td>
                                                    <td>R$ 1.146,33</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/03/2003</td>
                                                    <td>R$ 1.146,33</td>
                                                </tr>
                                                <tr>
                                                    <td>SIMONE SIMANKE RAPHAEL</td>
                                                    <td>Técnico Legislativo</td>
                                                    <td>R$ 3.351,39</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/03/2013</td>
                                                    <td>R$ 3.351,39</td>
                                                </tr>
                                                <tr>
                                                    <td>JOSE CARLOS SILVA SILVEIRA</td>
                                                    <td>Procurador</td>
                                                    <td>R$ 4.477,58</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/03/2003</td>
                                                    <td>R$ 4.477,58</td>
                                                </tr>
                                                <tr>
                                                    <td>CARINA OLIVEIRA NEVES</td>
                                                    <td>Diretor de Mesa</td>
                                                    <td>R$ 2.258,54</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 2.258,54</td>
                                                </tr>
                                                <tr>
                                                    <td>ENIALE GOVONI SOTELO</td>
                                                    <td>Coordenador Jurídico</td>
                                                    <td>R$ 4.666,10</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 4.666,10</td>
                                                </tr>
                                                <tr>
                                                    <td>LAYR FERNANDO MAREK BARRETO</td>
                                                    <td>Diretor Administrativo</td>
                                                    <td>R$ 2.258,54</td>
                                                    <td>R$ 0,00</td>
                                                    <td>R$ 0,00</td>
                                                    <td>01/01/2017</td>
                                                    <td>R$ 2.258,54</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>














                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="vendors/jszip/dist/jszip.min.js"></script>
        <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>

    </body>
</html>