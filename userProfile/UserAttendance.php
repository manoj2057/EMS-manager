<!-- header section -->
<?php
  include 'includes/header.php';
  ?>
    <!-- End Header Section-->

    <hr>

<section class="attendance">
  <div class="container">
  
  <form action="#" method="POST">
         <table class="tbl-30">
         <table style="width: 100%">
        <tr>
          <th>Employees name</th>
          <th>date</th>
          <th colspan="4">Status</th>
          <h2>Employees Attendance</h2>
        </tr>

    
        <tr>
      
          <td><input type="text" name="name" value="<?php echo $row['firstname'];?> <?php echo $row['lastname'];?>"></td>
          <td>date<input type="date" name="date"></td>
          <td>Present<input type="radio" name="attend" id=""  value="present"/></td>
          <td>Late<input type="radio" name="attend" id="" value="late" /></td>
          <td>Absent<input type="radio" name="attend" id="" value="absent"></td>
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
    $date = $_POST['date'];
    $attend = $_POST['attend'];
    $sql="insert into attends values('','$name','$date','$attend')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('your attendence updated Sucessfully'); window.location='userprofile.php'</script>";

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);

}
?>
</html>