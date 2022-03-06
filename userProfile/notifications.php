<!-- header section -->
<?php
  include 'includes/header.php';
  ?>
    <!-- End Header Section-->

    <?php

$sql = "SELECT* FROM actions";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

    ?>

<br><br><br><br><br><br>

<div class="col-xl-12 text-center">
    <h2> <?php echo $row['full_name'];?></h2> 
    <h3>your leave request is  <?php echo $row['action'];?> </h3>
</div>
<?php
                        }
                        } else {
                        echo "0 results";
                        }
                        $conn->close();
                        ?>



<br><br><br><br>
<!-- footer section -->
<?php
  include 'includes/footer.php';
  ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>



</html>