<?php
include('../admin/config.php');
include('login-check.php');
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            margin-left: 10%;
            width: 300px;

        }

        li {
            float: left;
            text-align: center;
            background-color: red;

        }

        li a {
            display: block;
            padding: 8px;
            background-color: red;
            width: 100%;
            margin-left: auto;
            font: 20px sans-serif;
        }
    </style>
</head>

<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="manage-admin.php">Admin</a></li>
        <li><a href="manage-user.php">User</a></li>
        <li><a href="slider_view.php">Sliders</a></li>
    </ul>

</body>

</html>