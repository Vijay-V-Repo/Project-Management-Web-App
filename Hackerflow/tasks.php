<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Code Crew - Tasks</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- morris css -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
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
                                            <div class="col-md-12">
                                                <h1 class="page-title m-0" style="text-align: center;"><b style="color: navy">TASK MANAGEMENT</b></h1>
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
<button class="tablinks" onclick="openCity(event, 'todo')" id="defaultOpen" style="color: navy" >To-Do</button>    
<button class="tablinks" onclick="openCity(event, 'In Progress')" style="color: navy">In Progress</button>
<button class="tablinks" onclick="openCity(event, 'Completed')" style="color: navy">Completed</button>
</div>

<div id="todo" class="tabcontent">


<!-- TO do Bar Starts -->     

                            <div class="row">

                                <div class="col-md-12">
                                    <section id="cd-timeline" class="cd-container">
                                        <div class="cd-timeline-block">
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>Website Design</h3>
                                                            <p class="mb-0 text-muted">To add interactive design elements to all the tabs and bars and also adding the motion graphics using the cutting-edge technologies</p><br>
                                                            <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     <a class="dropdown-item" href="#">Move to In-Progress</a>
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>

                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 21, 02:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-briefcase-search-outline h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
            
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 21, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-briefcase-edit-outline h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Network Integration</h3>
                                                            <p class="mb-0 text-muted">To integrate the login and registration pages using backend technology such as PHP, Node.js</p>
                                                        </div>
                                                        <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     <a class="dropdown-item" href="#">Move to In-Progress</a>
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>JSON And AJAX</h3>
                                                            <p class="mb-0 text-muted">Using JSON and AJAX technologies, to make a complete working search bar which is to be integrated on the home page and dashboard of our website.</p><br>
                                                             <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     <a class="dropdown-item" href="#">Move to In-Progress</a>
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 22, 06:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-television h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 23, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-remote-desktop h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Home Page Creation</h3>
                                                            <p class="m-b-20 text-muted">To Create a homepage that includes graphs to represent data in tables, pie-chart, bar graphs, and scatter plots</p>
                                                            
                                                        </div>
                                                        <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     <a class="dropdown-item" href="#">Move to In-Progress</a>
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>IOT Integration</h3>
                                                            <p class="m-b-20 text-muted">To integrate IOT Devices with API's and also sending and retrieving datas to the database.</p>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">See more detail</button><br>
                                                             <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     <a class="dropdown-item" href="#">Move to In-Progress</a>
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Feb 18, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-television-guide h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Feb 19, 06:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-responsive h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Message Tab</h3>
                                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos.</p><br>
                                                             <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     <a class="dropdown-item" href="#">Move to In-Progress</a>
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
                                    </section> <!-- cd-timeline -->
                                </div>
                            </div><!-- Row -->            
                             
</div>
            
<div id="In Progress" class="tabcontent">


  

                            <div class="row">

                                <div class="col-md-12">
                                    <section id="cd-timeline" class="cd-container">
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>Website Design</h3>
                                                            <p class="mb-0 text-muted">To add interactive design elements to all the tabs and bars and also adding the motion graphics using the cutting-edge technologies</p><br>
                                                            <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 21, 02:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-briefcase-search-outline h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
            
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 21, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-briefcase-edit-outline h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Network Integration</h3>
                                                            <p class="mb-0 text-muted">To integrate the login and registration pages using backend technology such as PHP, Node.js</p>
                                                        </div>
                                                        <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>JSON And AJAX</h3>
                                                            <p class="mb-0 text-muted">Using JSON and AJAX technologies, to make a complete working search bar which is to be integrated on the home page and dashboard of our website.</p><br>
                                                            <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 22, 06:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-television h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 23, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-remote-desktop h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Home Page Creation</h3>
                                                            <p class="m-b-20 text-muted">
                                                                To Create a homepage that includes graphs to represent data in tables, pie-chart, bar graphs, and scatter plots
                                                            </p>
                                                        </div>
                                                        <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>IOT Integration</h3>
                                                            <p class="m-b-20 text-muted">To integrate IOT Devices with API's and also sending and retrieving datas to the database.</p>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">See more detail</button><br>
                                                               <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
    
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Feb 18, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-television-guide h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                     
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Feb 19, 06:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-responsive h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Chat Bot</h3>
                                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos.</p>
                                                        </div>
                                                        <div class="text-center">
                                                            <p>Check-Box</p>
                                                            <ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    HTML Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    CSS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JS Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    PHP Source Code
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
    JSON and AJAX Source Code
  </li>
</ul><br>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Move
  </button>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
     
     <a class="dropdown-item" href="#">Move to Completed</a>
    
</div>
</div>
                                                           </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
                                    </section> <!-- cd-timeline -->
                                </div>
                            </div><!-- Row -->            
                           
</div>

<div id="Completed" class="tabcontent">


  

                            <div class="row">

                                <div class="col-md-12">
                                    <section id="cd-timeline" class="cd-container">
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>Website Design</h3>
                                                            <p class="mb-0 text-muted">To add interactive design elements to all the tabs and bars and also adding the motion graphics using the cutting-edge technologies</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 21, 02:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-briefcase-search-outline h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
            
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 21, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-briefcase-edit-outline h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Network Integration</h3>
                                                            <p class="mb-0 text-muted">To integrate the login and registration pages using backend technology such as PHP, Node.js</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>JSON And AJAX</h3>
                                                            <p class="mb-0 text-muted">Using JSON and AJAX technologies, to make a complete working search bar which is to be integrated on the home page and dashboard of our website.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 22, 06:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-television h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Jan 23, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-remote-desktop h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Home Page Creation</h3>
                                                            <p class="m-b-20 text-muted">To Create a homepage that includes graphs to represent data in tables, pie-chart, bar graphs, and scatter plots</p>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
            
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="text-right">
                                                            <h3>IOT Integration</h3>
                                                            <p class="m-b-20 text-muted">To integrate IOT Devices with API's and also sending and retrieving datas to the database.</p>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">See more detail</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Feb 18, 04:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-television-guide h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
            
                                        <div class="cd-timeline-block">
                                            <div class="cd-timeline-content p-3">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="cd-date mb-4">Feb 19, 06:00 PM</div>
                                                            <div>
                                                                <i class="mdi mdi-responsive h2 text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h3>Message Tab</h3>
                                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- cd-timeline-content -->
                                        </div> <!-- cd-timeline-block -->
                                    </section> <!-- cd-timeline -->
                                </div>
                            </div><!-- Row -->            

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

        <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>

        <!-- dashboard js -->
        <script src="assets/pages/dashboard.int.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>