<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>View Docs - CODE CREW</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
      <?php include'leftbar.php'; ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
        <?php include'header.php'; ?> 
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            
                                            <h4 class="page-title m-0">Documents</h4>
                                             
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div> 
                            <!-- end page title -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Project</th>
                                                    <th>Title</th>
                                                    <th>Person</th>
                                                    <th>Date</th>
                                                    <th>View</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>Pro Covid</td>
                                                    <td>Flow Chart</td>
                                                    <td>David</td>
                                                    <td>17/02/2021</td>
                                                    <td><a href="#" target="_blank"><button class="btn btn-info waves-effect waves-light" style = "float:left"><i class="fas fa-eye"></i></button></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Pro Covid</td>
                                                    <td>Flow Chart</td>
                                                    <td>David</td>
                                                    <td>17/02/2021</td>
                                                    <td><a href="#" target="_blank"><button class="btn btn-info waves-effect waves-light" style = "float:left"><i class="fas fa-eye"></i></button></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Pro Covid</td>
                                                    <td>Flow Chart</td>
                                                    <td>David</td>
                                                    <td>17/02/2021</td>
                                                    <td><a href="#" target="_blank"><button class="btn btn-info waves-effect waves-light" style = "float:left"><i class="fas fa-eye"></i></button></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>IOT</td>
                                                    <td>Flow Chart</td>
                                                    <td>David</td>
                                                    <td>17/02/2021</td>
                                                    <td><a href="#" target="_blank"><button class="btn btn-info waves-effect waves-light" style = "float:left"><i class="fas fa-eye"></i></button></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>PROJECT MANAGEMENT</td>
                                                    <td>Flow Chart</td>
                                                    <td>David</td>
                                                    <td>17/02/2021</td>
                                                    <td><a href="#" target="_blank"><button class="btn btn-info waves-effect waves-light" style = "float:left"><i class="fas fa-eye"></i></button></a></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Hackerflow</td>
                                                    <td>Flow Chart</td>
                                                    <td>David</td>
                                                    <td>17/02/2021</td>
                                                    <td><a href="#" target="_blank"><button class="btn btn-info waves-effect waves-light" style = "float:left"><i class="fas fa-eye"></i></button></a></td>
                                                    
                                                </tr>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                                    

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
<?php include'footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>