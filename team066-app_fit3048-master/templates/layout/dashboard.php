<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="../webroot/favicon.ico">
    <?= $this->Html->image("favicon.ico")?>
    <title>SEQ Steel Fixings </title>

    <!-- Bootstrap -->
    <?= $this->Html->css("/vendors/bootstrap/dist/css/bootstrap.min.css") ?>
    <!-- Font Awesome -->
    <?= $this->Html->css("/vendors/font-awesome/css/font-awesome.min.css") ?>

    <!-- NProgress -->
    <?= $this->Html->css("/vendors/nprogress/nprogress.css") ?>
    <!-- iCheck -->
    <?= $this->Html->css("/vendors/iCheck/skins/flat/green.css") ?>

    <!-- bootstrap-progressbar -->
    <?= $this->Html->css("/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css") ?>
    <!-- JQVMap -->
    <?= $this->Html->css("/vendors/jqvmap/dist/jqvmap.min.css") ?>
    <!-- bootstrap-daterangepicker -->
    <?= $this->Html->css("/vendors/bootstrap-daterangepicker/daterangepicker.css") ?>

    <!-- Custom Theme Style -->
    <?= $this->Html->css("/build/css/custom.min.css") ?>


</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href=<?=$this->Url->build(['controller'=> 'Pages','action' => 'home']) ?> class="site_title">
                        <i class="fa fa-tint"></i> <span>SEQ Steel Fixings</span>
                    </a>
                </div>

                <div class="clearfix"></div>


                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="position: sticky">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href=<?=$this->Url->build(['controller'=> 'Pages','action' => 'home']) ?>>
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </li>
                            <li><a href=<?=$this->Url->build(['controller'=> 'Projects','action' => 'index']) ?>>
                                    <i class="fa fa-edit"></i> Projects
                                </a>

                                <ul class="nav child_menu">
                                    <li><a href="form.html">General Form</a></li>
                                    <li><a href="form_advanced.html">Advanced Components</a></li>
                                    <li><a href="form_validation.html">Form Validation</a></li>
                                    <li><a href="form_wizards.html">Form Wizard</a></li>
                                    <li><a href="form_upload.html">Form Upload</a></li>
                                    <li><a href="form_buttons.html">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> Coming Soon <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">General Elements</a></li>
                                    <li><a href="media_gallery.html">Media Gallery</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="glyphicons.html">Glyphicons</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                </ul>
                            </li>




                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small" style="padding-left: 15px;">

                        <a
                            href=<?=$this->Url->build(['controller'=> 'Users','action' => 'logout']) ?>>
                            <h4 <i class="fa fa-power-off"></i> Logout</h4>

                        </a>

                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>



        <!-- page content -->
        <div class="right_col" role="main">


            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="dashboard_graph">
                        <?= $this->fetch('content'); ?>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <br />

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



</body>
</html>

