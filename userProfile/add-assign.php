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
          <th>project name</th>
          <th>git-link</th>
          
        </tr>

    
        <tr>
      
          <td>project name<input type="text" name="project_name"></td>
          <td>link<input type="url" name="link"></td>
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
    $project_name = $_POST['project_name'];
    $link = $_POST['link'];
    $sql="insert into projects values('','$project_name','$link')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('project added successfully Sucessfully'); window.location='userprofile.php'</script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);

}
?>
</html>