<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Code Crew - Projects</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- morris css -->
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style>
            /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
        </style>

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
                                                <h1 class="page-title m-0"><b style="color: navy"> PROJECT MANAGEMENT</b></h1>
                                            </div>
                                   
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                                </div>
                            </div> 
                            <!-- end page title -->
                            <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'In Progress')" id="defaultOpen" style="">In Progress</button>
  <button class="tablinks" onclick="openCity(event, 'Completed')">Completed</button>
</div>

<div id="In Progress" class="tabcontent">
  
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <a href="project-details.php">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 1</h6>
                                                <br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Data Management</h4>
                                            </div>
                                           <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 25% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 5 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Feb 21 </p><br><br>
                                            <span class="font-14 m-0">19 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                        
                                    </div>
                                    </a>
                                </div>
            
                                <div class="col-xl-3 col-md-6">
                                    <a href="project-details.php">
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 2</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Virtual Reality</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 29% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 3 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Feb 23 </p><br><br>
                                            <span class="font-14 m-0">21 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                        </div>
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-pink mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 3</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Social Connect App</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 35% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 6 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Feb 22 </p><br><br>
                                            <span class="font-14 m-0">22 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
            
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-success mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 4</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Flutter PWA</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 29% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 5 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Feb 28 </p><br><br>
                                            <span class="font-14 m-0">26 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                            </div>  
                            <!-- end row -->
                            <div class="row">
                            <a href="project-details.php">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 5</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">ML-Algo Project</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 89% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 2 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Feb 20 </p><br><br>
                                            <span class="font-14 m-0">18 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 6</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Business Tracer App</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 13% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 7 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : March 01 </p><br><br>
                                            <span class="font-14 m-0">32 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-pink mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 7</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">AR Visualizer</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 52% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 6 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Feb 06 </p><br><br>
                                            <span class="font-14 m-0">36 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
            
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-success mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 8</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">COVID-19 Trace App</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 55% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 8 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : March 21 </p><br><br>
                                            <span class="font-14 m-0">48 days Left! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                            </div>  
                            <!-- end row -->
</div>

<!-- "ONGOING PROJECT TAB" completed -->

<!-- "COMPLETED PROJECT TAB" - STARTS -->


<div id="Completed" class="tabcontent">
  
                            <div class="row">
                            <a href="project-details.php">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 1</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">IOT PWA</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 100% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 3 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Jan 21 </p><br><br>
                                            <span class="font-14 m-0">Completed! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 2</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">AI BOT</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 100% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 7 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Jan 11 </p><br><br>
                                            <span class="font-14 m-0">Completed! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                                <div class="col-xl-3 col-md-6">
                                  <a href="project-details.php">
                                    <div class="card bg-pink mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 3</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Delivery App</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 100% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 5 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Jan 31 </p><br><br>
                                            <span class="font-14 m-0">Completed! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                      </div>
            
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-success mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 4</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white">Socket Design</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 100% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 8 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Jan 02 </p><br><br>
                                            <span class="font-14 m-0">Completed! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                            </div>  
                            <!-- end row --> 
                                <div class="col-xl-3 col-md-6">
                                <a href="project-details.php">
                                    <div class="card bg-success mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">Project - 5</h6><br><br>
                                                <h4 class="mb-3 mt-0 float-centre text-white"> CAR GPS Tracer</h4>
                                            </div>
                                            <div class="progress m-b-45">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="badge badge-light text-danger"  >
                                                     <span class="ml-2"> 100% </span>
                                                    </div>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0" style="float:left;">Members : 4 </p>
                                            <p class="font-14 m-0" style="float:right;">Due : Jan 13 </p><br><br>
                                            <span class="font-14 m-0">Completed! <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                                            </div></span>
                                        </div>
                                    </div>
                                    </a>
                                    </div>
                            </div>  

   <!-- "COMPLETED PROJECT TAB" - STARTS -->

                            <!-- end row -->
                    </div>


                                    <script>
                                        document.getElementById("defaultOpen").click();
                                    function openCity(evt, cityName) {
                                      var i, tabcontent, tablinks;
                                      tabcontent = document.getElementsByClassName("tabcontent");
                                      for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                      }
                                      tablinks = document.getElementsByClassName("tablinks");
                                      for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                      }
                                      document.getElementById(cityName).style.display = "block";
                                      evt.currentTarget.className += " active";
                                    }
                                    </script>
        <!-- Card Boxes completed-->


                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
<?php include'footer.php'; ?>

            </div>
            <!-- End Right content here -->

        
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

        <!--Morris Chart-->
        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>

        <!-- dashboard js -->
        <script src="assets/pages/dashboard.int.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>