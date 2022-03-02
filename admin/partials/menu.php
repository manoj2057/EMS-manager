<?php
include('../admin/config.php');
include('login-check.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style>
        /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }

        .fixed-header,
        .fixed-footer {
            width: 100%;
            position: fixed;
            background: #333;
            padding: 10px 0;
            color: #fff;
        }

        .fixed-header {
            top: 0;
        }

        .fixed-footer {
            bottom: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            /* Center the DIV horizontally */
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 7px 25px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="index.php">Home</a>
                <a href="manage-admin.php">Admin</a>
                <a href="manage-user.php">User</a></li>
                <a href="slider_view.php">Sliders</a></li>
            </nav>
        </div>
    </div>

</body>

</html>