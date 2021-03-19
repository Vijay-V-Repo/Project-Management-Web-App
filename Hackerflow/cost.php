<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>cost - CODE CREW</title>
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
            <?php include 'leftbar.php'; ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                  <?php include 'header.php'; ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                           
                                
                                    <div class="page-title-box" align="center">
                                        
                                            <div class="col-md-8">
                                                <h2 class="page-title m-0" ><b> Price-Convertor </b></h2>
                                            </div>
                                            
                                            <!-- end col -->
                               
                                        <!-- end row -->
                                    </div>
                                    <!-- end page-title-box -->
                               
                          
                            <!-- end page title -->

                            <div class="row">
         <div class="row">
             <div class="col-xl-12">
                                    <div class="card m-b-30" style="width: 67.5rem; background-color: #ffccff">
                                        <div class="card-body"  >

                                            <div>
                                                        <div align="center"><button type="submit" class="btn btn-warning waves-effect waves-light" style="width: 100%">Real-time Price Convertor</button><br>
                                                        </div><br>
                                                        <div class="w3-row-padding" align="center"><hr>
  <div class="w3-half w3-margin-top">
    <label>INR</label>
    <input id="inputINR" class="w3-input w3-border" type="number" placeholder="Indian Rupee" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div><hr>
  <div class="w3-half w3-margin-top">
    <label>USD</label>
    <input id="inputUSD" class="w3-input w3-border" type="number" placeholder="United States Dollar" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div><hr>
  <div class="w3-half w3-margin-top">
    <label>EUR</label>
    <input id="inputEUR" class="w3-input w3-border" type="number" placeholder="Euro" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div><hr>
  <div class="w3-half w3-margin-top">
    <label>CAD</label>
    <input id="inputCAD" class="w3-input w3-border" type="number" placeholder="Canadian Dollar" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div><hr>
</div>
                                                       
                                          </div>

                                    
                                               
                                            </div>
                                        </div>
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


        <script>
function speedConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputINR = document.getElementById("inputINR");
  var inputUSD = document.getElementById("inputUSD");
  var inputEUR = document.getElementById("inputEUR");
  var inputCAD = document.getElementById("inputCAD");
  if (source=="inputINR") {
    inputUSD.value=(valNum*72.34).toFixed(2);
    inputEUR.value=(valNum*86.60).toFixed(2);
    inputCAD.value=(valNum*58.26).toFixed(2);
  }
  if (source=="inputUSD") {
    inputINR.value=(valNum*72.24).toFixed(2);
    inputEUR.value=(valNum*0.84).toFixed(2);
    inputCAD.value=(valNum*1.24).toFixed(2);
  }
  if (source=="inputEUR") {
    inputINR.value=(valNum*86.60).toFixed(2);
    inputUSD.value=(valNum*1.20).toFixed(2);
    inputCAD.value=(valNum*1.49).toFixed(2);
  }
  if (source=="inputCAD") {
    inputINR.value=(valNum*58.26).toFixed(2);
    inputUSD.value=(valNum*0.81).toFixed(2);
    inputEUR.value=(valNum*0.67).toFixed(2);
  }
}
</script>

                                                    
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
        <script src="../plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/pages/lightbox.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>