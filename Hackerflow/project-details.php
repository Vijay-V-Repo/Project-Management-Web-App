<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Project Details - CODE CREW</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Sweet Alert -->
        <link href="plugins/sweet-alert2/sweetalert2.css" rel="stylesheet" type="text/css">
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
                                                <h4 class="page-title m-0">PROJECT : PROJECT MANAGEMENT</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="float-right d-none d-md-block">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ti-settings mr-1"></i> Options
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                            
                                                            <a class="dropdown-item" href="#">Task Manager</a>
                                                            <a class="dropdown-item" href="idea-proposal.php">Idea Proposal</a>
                                                            <a class="dropdown-item" href="testing.php">
                                                            Project Testing</a>
                                                            <a class="dropdown-item" href="#">Finish Project</a>
                                                        </div>
                                                    </div>
                                                </div>
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
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                
                                                <h4 class="mb-3 mt-0 float-left">Total Tasks</h4>
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
            
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                
                                                <h4 class="mb-3 mt-0 float-left">Incomplete Tasks</h4>
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
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-pink mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                
                                                <h4 class="mb-3 mt-0 float-left">Ongoing Tasks</h4>
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
            
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                
                                                <h4 class="mb-3 mt-0 float-left">Completed Tasks</h4>
                                            </div>
                                            
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-18 m-0">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- end row -->
            
                            <div class="row">
                                <div class="col-xl-6">
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
                                                    <h4 class="card-title font-16 mt-0"><br />Project Description<br /></h4>
                                                    <p class="card-text">This is a wider card with supporting text below as
                                                        a natural lead-in to additional content. This card has even longer
                                                        content than the first to show that equal height action.
                                                    Project Descriptions must include: ... A description of the proposed research project, including preliminary supporting data where appropriate, specific objectives, methods, and procedures to be used, and expected significance of the results.</p>
                                                    <p class="card-text">
                                                        <small class="text-muted">Due : 04/04/2021</small>
                                                    </p>
                                                    
                                                </div>
                                        
                                            </div>
                                        <div class="card-body">
                                        <h4 class="card-title font-16 mt-0"><br />Project Status : 
                                        <span class="badge badge-info font-16 " style="float:right">Ongoing</span>
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
                                            <h4 class="mt-0 header-title mb-4">Team Members</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Tasks Completed</th>
                                                            <th scope="col">Remove </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>5</td>
                                                            <td>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" ><i class="fas fa-trash-alt"></i></button> 
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>5</td>
                                                            <td>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" ><i class="fas fa-trash-alt"></i></button> 
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>5</td>
                                                            <td>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" ><i class="fas fa-trash-alt"></i></button> 
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>5</td>
                                                            <td>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" ><i class="fas fa-trash-alt"></i></button> 
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sarah Lone</th>
                                                            
                                                            <td><a href="mailto:asdf@gmail.com" target="_blank">asdf@gmail.com</a></td>
                                                            <td><a href="tel:1234567890" >1234567890</a></td>
                                                            <td>5</td>
                                                            <td>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" ><i class="fas fa-trash-alt"></i></button> 
                                                            </td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>                
                            
            </div>
                            
            <div class="row">
             <div class="col-xl-12">
                                <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Leave Your Comments !</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-20">
                                                <form action="#" method="post">
                                                
                                                <div class="form-group">
                                                    <label>Comments :</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5" required name="cmts" id="cmts"></textarea>
                                                    </div>
                                                </div>
                                                <div align="right">
                                                <button type="reset" class="btn btn-danger waves-effect waves-light" >Cancel</button> 
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" >Submit</button>
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
                <h4 class="mt-0 header-title mb-4">Comment Section</h4> 
                    <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">David M. Bailey </span>
                        
                        <span class="d-none d-md-inline-block ml-1" style = "float:right">11/03/2021</span>
                        <hr>
                           <div class="card m-b-30 card-body">
                                            
                                <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This card has even longer content
                                than the first to show that equal height action.</p>
                                            
                            </div>                        
                        
                    </div>
                <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">David M. Bailey </span>
                        
                        <span class="d-none d-md-inline-block ml-1" style = "float:right">11/03/2021</span>
                        <hr>
                           <div class="card m-b-30 card-body">
                                            
                                <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This card has even longer content
                                than the first to show that equal height action.</p>
                                            
                            </div>                        
                        
                    </div>
                <div>
                        <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" style="height:30px; width=100%">
                        <span class="d-none d-md-inline-block ml-1">David M. Bailey </span>
                        
                        <span class="d-none d-md-inline-block ml-1" style = "float:right">11/03/2021</span>
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

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> 
                
    <!-- member remove -->


                
                <?php include'footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        
        
        <!-- Sweet-Alert  -->
        <script src="plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/sweet-alert.init.js"></script>        

        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
        
        google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Number'],
  ['Completed', 5],
  ['Incomplete', 2],
  ['On Progress', 4]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Task Manager', 'width':490, 'height':380};

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
        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>

        <!-- dashboard js -->
        <script src="assets/pages/dashboard.int.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>