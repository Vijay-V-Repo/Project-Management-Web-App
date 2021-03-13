<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Idea Proposal - CODE CREW</title>
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

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h4 class="page-title m-0">Share your Ideas with your Team</h4>
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
         <div class="row">
             <div class="col-xl-12">
                                <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Explain Your Idea</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-20">
                                                <form action="#" method="post">
                                                
                                                <div class="form-group">
                                                    
                                                    <div>
                                                        <textarea required class="form-control" rows="5" required name="idea" id="idea"></textarea>
                                                    </div>
                                                </div>
                                                <div align="right">
                                                <button type="reset" class="btn btn-danger waves-effect waves-light" >Cancel</button> 
                                                <button type="submit" class="btn btn-success waves-effect waves-light" >Submit</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
            
                                        </div>
                                    </div>
                                </div>                
             
        <div class="col-xl-12"> 
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Proposed Ideas</h4> 
                    <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">David M. Bailey </span> &emsp;
                        <span class="d-none d-md-inline-block ml-1">11/03/2021</span>
                        <button type="submit" class="btn btn-success waves-effect waves-light" style = "float:right">Finalise</button>
                        <hr>
                           <div class="card m-b-30 card-body">
                                            
                                <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This card has even longer content
                                than the first to show that equal height action.</p>
                                            
                            </div>                        
                        
                    </div>
                <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">David M. Bailey </span> &emsp;
                        <span class="d-none d-md-inline-block ml-1">11/03/2021</span>
                        <button type="submit" class="btn btn-success waves-effect waves-light" style = "float:right">Finalise</button>
                        <hr>
                           <div class="card m-b-30 card-body">
                                            
                                <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This card has even longer content
                                than the first to show that equal height action.</p>
                                            
                            </div>                        
                        
                    </div>
                                    
            </div>
        </div>
            
            </div>
             
          <div class="col-xl-12"> 
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Finalised Idea</h4> 
                    <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">David M. Bailey </span> &emsp;
                        <span class="d-none d-md-inline-block ml-1">11/03/2021</span>
                        <button type="submit" class="btn btn-danger waves-effect waves-light" style = "float:right">Remove</button>
                        <hr>
                           <div class="card m-b-30 card-body">
                                            
                                <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This card has even longer content
                                than the first to show that equal height action.</p>
                                            
                            </div>                        
                        
                    </div>
              
                                    
            </div>
        </div>
            
            </div>
            </div>  
                            </div>

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

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