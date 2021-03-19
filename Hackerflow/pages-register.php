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
        <!-- Sweet Alert -->
        <link href="plugins/sweet-alert2/sweetalert2.css" rel="stylesheet" type="text/css">
        
        
        <!-- Google Button Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #40bf40;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
        <!-- Google Button Css End-->


        

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
        

        <div class="account-pages">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <div >
                                <a class="logo logo-admin"><img src="assets/images/logo_dark.png" height="78" alt="logo"></a>
                            </div>
                            <h5 class="font-14 text-muted mb-4">Keep Track Of What You are doing !</h5>
                            <p class="text-muted mb-4">Getting anxious about project management in WFH ? Or Difficult to keep track of multiple projects? Here, we give a great solution to you ! Manage your projects and collaborate with your team easily in a user - friendly way. <br>Join with us & lead with us</p>

                            <h5 class="font-14 text-muted mb-4">Goals :</h5>
                            <div>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Know what you are doing & what pace you are doing it.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Collaborate with your team as well as your clients in a much easier way.</p>
                                <p><i class="mdi mdi-arrow-right text-primary mr-2"></i>Assign tasks, complete tasks and know your statistics as well.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">Register</h4>
                                    <div>
                                        <a class="logo logo-admin"><img src="assets/images/logo_dark.png" height="78" alt="logo"></a>
                                    </div>
                                </div>
        
                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" action="login.php" onSubmit = "return checkPassword(this)">
        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" required="" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" required="" name="user" id="user" placeholder="Username">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="number" required="" name="ph" id="ph" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <select class="form-control">
                                                        <option>Select</option>
                                                        <option>Student</option>
                                                        <option>Professional</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control"  type="password" required="" name="pass1" id="pass1" placeholder="Password">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control"  type="password" required="" name="pass2" id="pass2" placeholder="Confirm Password" onclick="pass_check()">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label font-weight-normal" for="customCheck1">I accept to the <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" >Register</button>
                                            </div>
                                        </div>
                                        <!-- Google signin Button -->
                                
                    <div class="form-group text-center row m-t-20">
                          <div class="col-12">
                                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                                    </i> Signup with Google+
                                </a>
                          </div>
                    </div>
                                
                                <!-- Google signin Button End -->
                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="login.php" class="text-muted">Already have account?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
        
                          
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>


        <!-- jQuery  -->
        
    <script>
      // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.pass1.value; 
                password2 = form.pass2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if(password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                     
                    return true; 
                } 
            } 
        </script>
        
        
        <script src="plugins/sweet-alert2/sweetalert2.min.js" aria-hidden="true"></script>
        <script src="assets/pages/sweet-alert.init.js" aria-hidden="true"></script>
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