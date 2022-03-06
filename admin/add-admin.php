<?php include('partials/menu.php');
include('config.php');  ?>
<div class="main-content">
        <div class="wrapper">
         <h1>Add Admin</h1>
    <br>
    <form action="#" method="POST">
         <table class="tbl-30">
         <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name"></td>
                <span class="text-danger">*<?php echo $nameErr;?></span>
            </tr> 
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
                <span class="text-danger">*<?php echo $nameErr;?></span>
            </tr> 
            
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password"></td>
                <span class="text-danger">*<?php echo $passwordErr;?></span>
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

  <!-- Footer Selection Starts -->
  <?php include('partials/footer.php');  ?>
  


  <?php

$nameErr = $password = "";
$full_name = $username = $password= "";

    if(isset($_POST['submit'])){

        if (empty($_POST["full_name"])) {
            $nameErr = "fullName is required";
          } else {
            $full_name=$_POST['full_name'];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$full_name)) {
              $nameErr = "Only letters and white space allowed";
            }
          }
        
          if (empty($_POST["username"])) {
            $nameErr = "userName is required";
          } else {
            $username=$_POST['username'];
            if ($_POST["username"]==$username) {
                $nameErr = "username exist";
              }
            }
          
        
        
        $password=$_POST['password'];


    
        // SQl
        $sql="insert into tbl_admin values('','$full_name','$username','$password')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('location:manage-admin.php');

          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
          mysqli_close($conn);

    }
?>