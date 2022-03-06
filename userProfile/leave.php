<!-- header section -->
<?php
  include 'includes/header.php';
  ?>
    <!-- End Header Section-->

    <hr>
    <div class="col-xl-12 text-center">
    <h2><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></h2> 
    <h3>Would you like to apply for leave</h3>
</div>

<section class="attendance">
  <div class="container">
  
  <form action="#" method="POST">
         <table class="tbl-30">
         <table style="width: 100%">
        <tr>
          <th>Employees name</th>
          <th>start_date</th>
          <th>end_date</th>
          <th >reason</th>
         
        </tr>

    
        <tr>
      
          <td><input type="text" name="name" value="<?php echo $row['firstname'];?> <?php echo $row['lastname'];?>"></td>
          <td><input type="date" name="start_date"></td>
          <td><input type="date" name="end_date"></td>
          <td><input type="text" name="reason"></td>
          
          <td>  <input type="submit" name="submit" id=""></td>
        </tr>
      </table>
    </form>
  </div>
</section>

<br><br><br><br>
<!-- footer section -->
<?php
  include 'includes/footer.php';
  ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = $_POST['reason'];
    $sql="insert into leaves values('','$name','$start_date','$end_date','$reason')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('request send  Sucessfully'); window.location='userprofile.php'</script>";

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);

}
?>
</html>