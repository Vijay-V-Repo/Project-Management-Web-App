<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Doc Storage - CODE CREW</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

          <!-- Magnific popup -->
        <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

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
                                                <h2 class="page-title m-0" ><b> Documents & Files </b></h2>
                                            </div>
                                            
                                            <!-- end col -->
                               
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                               
                          
                            <!-- end page title -->

                            
         <div class="row">
             
                 <div class="card" style="background-color: #ccd8ff;">                        <div class="card-body" >
                                            
                                   
                         <div class="col-lg-12">
                                            <div class="p-20">
                                                <form action="#" method="post">
                                                
                                                <div class="form-group">

                                                    <br><hr>
                <div class="col-lg-6">
                    <label>Select Project</label>
                       
                            <select class="form-control">
                                    <option>Project Covid</option>
                                    <option>Project IOT</option>
                                    <option>Project ML</option>
                            </select>
                        
                                      
                </div>
                <div class="col-lg-6">
                    <label for="example-text-input" class="col-form-label">File Name</label>
                         
                    <input class="form-control" type="text" name="fname"id="fname">
                                     
                </div>
                                                        
                    <div class="col-lg-6" ><br>
                        <label for="example-text-input" class="col-form-label">Upload</label>
                      <div class="custom-file" style="float:left">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                          <br>
                      </div>
                    </div>
                   <button type="submit" class="btn btn-success waves-effect waves-light" style = "float:right">Upload</button>
                   
                    <br><br><hr>

                                    </div>
                                
            
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body"  >

                                            <div>
                                                        <div align="center"><button class="btn btn-outline-warning waves-effect waves-light" style="width: 100%">QUICK LINKS</button><br>
                                                        </div><br><hr>
                                                        <a href="https://www.google.com/intl/en_cy/drive/download/"><img src="https://9to5google.com/wp-content/uploads/sites/4/2020/01/google_drive_logo.jpg?quality=82&strip=all&w=1600" width="32%" height="15%"></a>
                                                    <a href="http://github.com/"><img src="https://miro.medium.com/max/719/0*9f5uMrKMjLbzEf7q.png" width="25%" height="15%"></a>
                                                    <a href="https://www.dropbox.com/?landing=dbv2"><img src="https://www.hotspotshield.com/imgs/resources/how-to-unblock-dropbox.png" width="21%" height="6%"></a>
                                                    <br><hr>
            
                                            
            
                                          </div>

                                                </div>

                                            

                                                
                                               
                                            </div>
                                        </div>
                                                </form>
                                    </div>
            
                                        </div>
                                    
                     </div>  

       
            
            </div>
        
              
                            </div>

            <!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include'footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
        </div>
                                                    
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

         <!-- Magnific popup -->
        <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/pages/lightbox.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>