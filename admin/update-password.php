<?php include('partials/menu.php');  ?>
<div class="main-content">
        <div class="wrapper">
         <h1>Change Password</h1>
    <br>

    <?php
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
        }
    ?>

    <form action="#" method="POST">
         <table class="tbl-30">
         <tr>
                <td>Current Password:</td>
                <td><input type="password" name="current_password"></td>
            </tr> 
            <tr>
                <td>New Password:</td>
                <td><input type="password" name="new_password"></td>
            </tr> 
            
            <tr>
                <td>Confirm Password :</td>
                <td><input type="password" name="confirm_password"></td>
            </tr> 

            <tr>
                <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                 <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                </td>
            </tr> 
        </table>
    </form>
        </div>
</div>

<?php include('partials/footer.php');  ?>

<?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
 $current_password=$_POST['current_password'];
 $new_password=$_POST['new_password'];
 $confirm_password=$_POST['confirm_password'];
$sql=mysqli_query($conn,"SELECT * FROM tbl_admin where id=$id && password='$current_password'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $sql1=mysqli_query($conn,"update tbl_admin set password='$new_password' where id='$id'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>

        


       
