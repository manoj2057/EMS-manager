<!-- Main Content Section Starts -->
<div class="main-content">
     <div class="wrapper">
          <h1 style="text-align: center;">Dashboard</h1>
          <?php
          include('partials/menu.php');
          //   session_start();
          if (isset($_SESSION['login'])) {
               echo $_SESSION['login'];
               unset($_SESSION['login']);
          }
          ?>


          <div class="clearfix"></div>
     </div>
     <!--  Main Content Section Ends -->

     <!-- Footer Selection Starts -->
     <?php include('partials/footer.php');  ?>


     </body>

     </html>