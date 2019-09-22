<?php
include_once("./database/constants.php");
if (!isset($_SESSION["adminid"])) {
    header("location:" . DOMAIN . "/loginAdmin.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Welcome to Icha3ah Admin</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <script src="./js/mainOperations.js" type="text/javascript"></script>
        <style>
            .upload-btn-wrapper {
                position: relative;
                overflow: hidden;
                display: inline-block;
            }

            .buttonup {
                border: 2px solid gray;
                color: gray;
                background-color: white;
                padding: 8px 20px;
                border-radius: 8px;
                font-size: 20px;
                font-weight: bold;
            }

            .upload-btn-wrapper input[type=file] {
                font-size: 100px;
                position: absolute;
                left: 0;
                top: 0;
                opacity: 0;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Icha<sup>3</sup>ah</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Services
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Rumors</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Managements:</h6>
                            <a class="collapse-item" href="manage_rumors.php">Make a Romur</a>
                            <a class="collapse-item" href="consult_rumors.php">Consult&Edit</a>
                            <a class="collapse-item" href="consult_suggested_rumors.php">Suggested Rumors</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Users Services</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Managements:</h6>
                            <a class="collapse-item" href="consult_messages.php">Messages</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <?php include_once 'templates/navitem.php'; ?>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->


                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <br>                        <br>
                        <div class="container">
                            <?php
                            if (isset($_GET["msg"]) AND ! empty($_GET["msg"])) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                    <?php echo $_GET["msg"]; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
                                        <div class="card-header">
                                            <h4>New Rumor</h4>
                                        </div>
                                        <div class="card-body">
                                            <form id="rumor_create_form"  enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <label class="col-form-label" align="right">Rumor Type</label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-1">   
                                                        </div>
                                                        <div class="col-sm-3">   
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-control form-control-sm" id="rumor_type" name="rumor_type">
                                                                <option value="Science">Science</option>
                                                                <option value="Technologie">Technologie</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-9"></div>
                                                                <div class="col-md-3">
                                                                    <label class="col-form-label" style="text-align: right;">Admin</label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <input type="text" id="Admin_name" name="Admin_name"class="form-control form-control-sm" readonly value="Hamza The Z"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-groupe">
                                                            <label class="col-form-label" align="right">Date</label>
                                                            <div>
                                                                <input type="text" id="rumor_date" name="rumor_date" readonly class="form-control form-control-sm" value="<?php echo date("d/m/Y"); ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p></p>
                                                <div class="form-group row">
                                                    <div class="col-sm-1">   
                                                    </div>
                                                    <label class="col-sm-3 col-form-label" align="right">Title</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="title" class="form-control form-control-sm" id="title"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-1">   
                                                    </div>
                                                    <label class="col-sm-3 col-form-label" align="right">Article</label>
                                                    <div class="col-sm-4">
                                                        <textarea type="text" name="article" class="form-control form-control-sm" id="article" rows="5">

                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-1">   
                                                    </div>
                                                    <label class="col-sm-3 col-form-label" align="right">Image</label>
                                                    <div class="col-sm-4">
                                                        <input class="" type="file" id="file" name="file">
                                                    </div>
                                                </div>
                                                <center>
                                                    <input type="submit" id="rumors_creation" style="width:160px;" class="btn btn-info" value="Validate" title="Save Entries">
                                                </center>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <br>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Icha3ah.com <?php echo date("Y"); ?></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php include_once 'templates/logout.php' ?>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="js/sb-admin-2.min.js"></script>
    </body>
</html>