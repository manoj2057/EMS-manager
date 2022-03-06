<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Login page</title>
</head>

<body>

    <a href="index.php">Home</a>
    <div class="container">
        <form action="elogin.php" class="login" method="POST">
            <h1 class="mainHeading">Login Page</h1>
            <p>
                Email or Username: *
                <input type="email" name="email" placeholder="Write your email or username" required />
            </p>
            <p>
                Password: * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                <input type="password" name="password" placeholder="Write your password" required />
            </p>
            <input type="submit" value="Sign In" />
            <h6>If you are not registered?</h6><button type="button" class="btn btn-primary"><a href="register.php">Sign Up</a></button>
        </form>
    </div>
    <!--JS-->
    <script src="login.js"></script>
</body>

</html>