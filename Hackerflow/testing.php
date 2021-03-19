<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Testing - CODE CREW</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="center">

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

                           
                                
                                    <div class="page-title-box" align="center">
                                        
                                            <div class="col-md-8">
                                                <h2 class="page-title m-0" ><b> Testing & Bug Report </b></h2>
                                            </div>
                                            
                                            <!-- end col -->
                               
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                               
                          
                            <!-- end page title -->

                            
         <div class="row">
             <div class="col-xl-12">
                                <div class="card" style="background-color: #ccd8ff; ">
                                        <div class="card-body" >
                                            
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-20">
                                                <form action="#" method="post">
                                                
                                                <div class="form-group">
                                                <div>
                                                        
                                                            <div><button class="btn btn-warning waves-effect waves-light" style = "float:left">Select Status</button><br>
                                                            </div><br><hr>
                                                        <div>
                                                          <input type="radio" id="no" name="testing" value="1">
                                                          <label for="no">&emsp; Successfully Tested - No Bugs</label>
                                                        </div><br>
                                                        <div>
                                                          <input type="radio" id="yes" name="testing" value="0">
                                                          <label for="yes">&emsp; Testing Completed - Bugs Found</label>
                                                        </div>
                                                    <div><br><br>
                                        <button class="btn btn-danger waves-effect waves-light" style = "float:left">Add Bug Report</button>
                             <textarea class="form-control" rows="3" required name="idea" id="idea" placeholder="Post your Bug report and it's details here..."></textarea><br><br>

                           </div>
                                                        
                                                        <hr>
                                                        
                                                      
                                                    </div>

                                                </div>

                                            

                                                <div align="center">
                                                <button type="submit" class="btn btn-outline-success waves-effect waves-light" style="width: 25%;">Submit Status</button>
                                                 </div> 
                                                </form>
                                               
                                            </div>
                                        </div>
                                    </div>
            
                                        </div>
                                    </div>
                                </div>  

             
        <div class="col-xl-12"> 
        <div class="card" style="background-color: #ccd8ff">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Reported Bugs</h4> 


                    <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">John Wick </span> &emsp;
                        <span class="d-none d-md-inline-block ml-1">03:30 PM, Feb-21, 2021</span><br><br>

                        
                             <hr>
                        <div class="card m-b-30 card-body">
                                
                                <p class="card-text"><b>Testing Completed - Bugs Found</b>
                                    <br><br>
                                    Member management is not working.</p><br>
                        </div>  
                    </div>
                
                <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">John Wick </span> &emsp;
                        <span class="d-none d-md-inline-block ml-1">03:30 PM, Feb-21, 2021</span><br><br>

                        
                             <hr>
                        <div class="card m-b-30 card-body">
                                <p class="card-text"><b>Testing Completed - Bugs Found</b>
                                    <br><br>
                                Member management is not working.</p><br>
                        </div>  
                    </div>
            
            </div>
            
        
            </div>  
            
    
                            </div>

                        </div><!-- container fluid -->

                    <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'footer.php'; ?>

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