<?php
  include('config.php');
 $id=$_GET['id'];

$sql="delete from tbl_admin where id=$id";

if (mysqli_query($conn, $sql)) {
    
    header('location:manage-admin.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>
