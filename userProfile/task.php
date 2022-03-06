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
          <th>Project name</th>
          <th>Requirements</th>
          <th>Deadline</th>
        </tr>
        <?php

$sql = "SELECT* FROM assigns";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

    ?>
    
        <tr>
           <td><?php echo  $row['project_name']; ?></td>
           <td><?php echo $row['requirement']; ?></td>
           <td><?php echo  $row['deadline']; ?></td>
           <td> <button onclick="location.href='/ems/userprofile/add-assign.php'" type="button">
         add project</button></td>
        </tr>
        <?php
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                        ?>

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
      echo "<script>alert('your task added Sucessfully'); window.location='userprofile.php'</script>";

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);

}
?>
</html>