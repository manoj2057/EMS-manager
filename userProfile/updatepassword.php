<!-- header section -->
<?php
  include 'includes/header.php';
  ?>
    <!-- End Header Section-->

    <hr>

<section class="attendance">
  <div class="container">

   <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        ?>

  <form action="#" method="POST">
         <table class="tbl-30">
         <table style="width: 100%">
        <tr>
          <th>current password</th>
          <th>new_password</th>
          <th >confirm passwor</th>
          
        </tr>

    
        <tr>
      
          <td><input type="password" name="current_password" ></td>
          <td><input type="password" name="new_password"></td>
          <td><input type="password" name="attend" id=""  /></td>
          
          <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
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
    $id = $_GET['id'];
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = mysqli_query($conn, "SELECT * FROM signup where id=$id && password='$password'");
    $num = mysqli_fetch_array($sql);
    if ($num > 0) {
        $sql1 = mysqli_query($conn, "update signup set password='$new_password' where id='$id'");
        echo "<script>alert('Update Sucessfully'); window.location='manage-admin.php'</script>";
        header('location:../login.php');
    } else {


        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Old Password not match !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    }
}
?>



</html>