<?php
// session_start();
// include('../admin/config.php');
if(!isset($_SESSION['user']))
{
    $_SESSION['no-login-message']="<div class='error'>Please login to access Admin Panel.</div>";
    header('location:login.php');
}
?>