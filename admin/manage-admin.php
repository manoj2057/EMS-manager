<?php include('partials/menu.php');  ?>
<!-- Menu Selection Starts -->

<!-- Main Content Section Starts -->
<div class="main-content">
  <div class="wrapper">
    <br>
    <h1>Manage Admin</h1>
    <br>
    <!-- Button to Add Admin -->
    <a href="add-admin.php" class="btn-primary">Add Admin</a>
    <br><br>

    <table class="tbl-full" border="1px soli" style=" border-collapse: collapse; width: 100%; margin: auto;
  border: 3px solid ; ">
      <tr>
        <th>S.N</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Actions</th>
      </tr>
      <?php

      $sql = "SELECT * FROM tbl_admin";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
      ?>
          <tr style="text-align: center;">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo  $row['full_name']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td>
              <a href="update-password.php?id=<?php echo $row['id']; ?>" class="btn-primary">Change Password</a>
              <a href="update-admin.php?id=<?php echo $row['id']; ?>" class="btn-secondary">Update Admin</a>
              <a href="delete-admin.php?id=<?php echo $row['id']; ?>" class="btn-danger">Delete Admin</a>
            </td>
          </tr>
      <?php
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
    </table>

    <div class="clearfix"></div>
  </div>
  <!--  Main Content Section Ends -->

  <!-- Footer Selection Starts -->
  <?php include('partials/footer.php');  ?>

  </body>

  </html>