<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard - CODE CREW</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- morris css -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

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
                                                <h4 class="page-title m-0">Dashboard</h4>
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
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                
                                                <h4 class="mb-3 mt-0 float-left">Total Projects</h4>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-18 m-0">27</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="ongoing-projects.php" >
                                <div class="col-xl-4 col-md-6">
                                    
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h4 class="mb-3 mt-0 float-left text-white">Ongoing Projects</h4>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-18 m-0">15</p>
                                        </div>
                                    </div>
                                    
                                        </div>
                                   </a>
                                <a href="completed-projects.php" >
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-pink mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                
                                                <h4 class="mb-3 mt-0 float-left text-white">Completed Projects</h4>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-18 m-0">10</p>
                                        </div>
                                    </div>
                                </div>
                                   </a>
                                
                            </div>  
                            <!-- end row -->
            
                           <div class="row">
                                <div class="col-xl-6 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="piechart"></div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-xl-6">
                                    <div class="card" style="height:420px">
                                        
                                            <div class="card m-b-60">
                                                
                                                <div class="card-body">
                                                    <h4 class="card-title font-16 mt-0"><br />Members Statistics</h4>
                                            
                                                </div>
                                        
                                            </div>
                                        <div class="card-body">
                                        <h4 class="card-title font-16 mt-0">Total Linked Members : 
                                        <span class="badge badge-info font-16 " style="float:right">25</span>
                                        </h4>
                                        <h4 class="card-title font-16 mt-0"><br />Projects You created as a Lead: 
                                        <span class="badge badge-info font-16 " style="float:right">5</span>
                                        </h4>
                                        <h4 class="card-title font-16 mt-0"><br />Projects You joined as a Member: 
                                        <span class="badge badge-info font-16 " style="float:right">4</span>
                                        </h4>
                                        
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <!-- end row -->
              <div class="row">
             <div class="col-xl-12">
                                <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Linked Members</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Project</th>
                                                            
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>Web Development</td>
                                                            
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>Mobile Apps</td>
                                                            
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>Time Management</td>
                                                            
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>Time Management</td>
                                                            
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>Time Management</td>
                                                            
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>                
                            
            </div>
                            <div class="row">
                               
                                <!-- end col -->
            
                                
                                <!-- end col -->
            
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4"><br></h4>
                                            
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="First slide" height="500px">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid mx-auto" src="assets/images/small/img-2.jpg" alt="Second slide" style="height = 500px">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid mx-auto" src="assets/images/small/img-3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                
                            <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Steps To Follow</h4>
                                            <ol class="activity-feed mb-0">
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Step 1</span>
                                                        <span class="activity-text text-white"> P L A N </span>
                                                    </div>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Step 2</span>
                                                        <span class="activity-text text-white"> E X E C U T E</span>
                                                    </div>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Step 3</span>
                                                        <span class="activity-text text-white"> M O N I T O R</span>
                                                    </div>
                                                </li>
                                                <li class="feed-item">
                                                    <div class="feed-item-list">
                                                        <span class="date text-white-50">Step 4</span>
                                                        <span class="activity-text text-white">L A U N C H</span>
                                                    </div>
                                                </li>
                                            </ol>
            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- end row -->
            
                           
                           <!-- end row -->

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include'footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        
     <script>
        
        google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Number'],
  ['Completed', 10],
  ['On Going', 4]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Project Statistics', 'height':380};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
        </script>

        
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
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>

        <!-- dashboard js -->
        <script src="assets/pages/dashboard.int.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>