<!DOCTYPE html>
<html lang="en">
  <?php
  include 'includes/header.php';
  ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php include 'includes/profile.php' ?>
            <!-- /menu profile quick info -->

            <br />

            <?php
            include 'includes/navbar.php';
            ?>

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include 'includes/head.php'?>
        <!-- /top navigation -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
              <div class="wrapper">
        <h1>Add Admin</h1>
        <br>

        <form action="#" method="POST">
         <table class="tbl-30">
         <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" value=""  ></td>
            </tr> 
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"  value=""  required></td>
            </tr> 
            
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password"  value="" required></td>
            </tr> 

            <tr>
                <td colspan="2">
                 <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr> 
        </table>
    </form>


        
    </div>
            </div>
                </div>
              </div>

              
            </div>
                </div>
              </div>

              
            </div>
                </div>
              </div>

              
            </div>
                </div>
              </div>

              

              
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          
         
         

          
        </div>
        <!-- /page content -->

        <?php
            include 'includes/footer.php';
            ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
   

    <?php
// initializing variables
$errors = array(); 

    if(isset($_POST['submit'])){

      
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $nameErr=$passwordErr="";
        $sql = "SELECT * FROM users WHERE full_name='$full_name' OR username='$username' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if($full_name==""){
          echo"<alert>fullname cant be empty</alert>";
        }
      
        
        if ($user) { // if user exists
          if ($user['ful_name'] === $full_name) {
            array_push($errors, "full_name already exists");
          }
        }

          if($username==""){
            echo"<alert>username cant be empty</alert>";
          }
        
        
          
          if ($user) { // if user exists
            if ($user['username'] === $username) {
              array_push($errors, "user_name already exists");
            }
          }


            else{
        // SQl
        $sql="insert into tbl_admin values('','$full_name','$username','$password')";
        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Update Sucessfully'); window.location='manage-admin.php'</script>";

        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

  }
}
       
    
          
?>
	
  </body>
 
</html>
