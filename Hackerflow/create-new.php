<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>CODE CREW</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <h4 class="page-title m-0">CREATE NEW PROJECT !</h4>
                                                
                                            </div>
                                            
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div> 
                            <!-- end page title -->
                        

                            <div class="row">
                        <div class="page-content-wrapper ">

                        <div class="container-fluid">
 
                            <!-- end page title -->

                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <div class="card m-b-40">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Project Details</h4><hr />
                                            <p>Fill in the below details and click create button. We will generate a unique Team Id for you which can be used by your other team mates to join in the current project.
                                            </p><br />
                                            
                                            <form action="#" method="post">
                                                <div class="form-group">
                                                    <label>Project Name</label>
                                                    <input type="text" class="form-control" required placeholder=" ProjectName" name="pname" id="pname"/>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>About Project</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5" required name="pdesc" id="pdesc"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Additional Comments(Optional)</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5" name="pcmt" id="pcmt"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Estimated Completion Date</label>
                                                    <input type="date" class="form-control" required name="pdate" id="pdate"/>
                                                </div>
                                                <center>
                                                <div class="form-group">
                                                    <div><br />
                                                        
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Create
                                                        </button>
                                                    </div>
                                                </div>
                                                </center>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                            </div> <!-- end row -->            

                        </div><!-- container fluid -->

                    </div>
                                
                            </div>

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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>