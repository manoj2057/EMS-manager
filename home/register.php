<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form</title>
    <link rel="stylesheet" href="../css/signup.css" />
</head>

<body>
    <a href="index.php">Home</a>
    <div class="container">

        <form action="#" class="signUp" method="POST">
            <h1 class="mainHeading">SignUp</h1>
            <p>Required field are followed by *</p>
            <p>
                First Name:
                *<input type="text" name="firstname" placeholder="Write your first Name" value="" required>
            </p>

            <p>
                Last Name:
                *<input type="text" name="lastname" placeholder="Write your last Name" value="" required>
            </p>

            <p>
                Email: * <input type="email" name="email" placeholder="Write your email" value="" required />
            </p>

            <p>
                Password:
                *<input type="password" name="password" placeholder="Write your password" value="" required />
            </p>

            <fieldset>
                <legend>Gender</legend>
                <p>
                    *<input type="radio" id="male" name="gender" value="male" />Male
                    <input type="radio" id="female" name="gender" value="female" />Female
                    <input type="radio" id="other" name="gender" value="other" />Other
                </p>
            </fieldset>
            <p>Address <textarea name="address" id="address" cols="100" rows="5" required></textarea> </p>
            <p>Pincode <input type="number" name="pincode" id="pincode" required></p>
            <h2>Payment Information</h2>
            <p> Card Type:
                <select name="card_type" id="card_type">
                    <option value="">---Select a Card Type--</option>
                    <option value="visa">Visa</option>
                    <option value="esewa">e-sewa</option>
                    <option value="mastercard">Mastercard</option>
                </select>
            <p>
                Card Number<input type="number" name="card_number" id="card_number" />
            </p>
            <p>
                Expiration Date: <input type="date" name="exp_date" id="exp_date">
            </p>
            <p>CVV *<input type="password" name="cvv" id="cvv"> </p>
            </p>
            <input type="submit" name=submit value="Submit">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>
<?php include('../php/connection.php'); ?>
<?php
$errors = array(); 
if (isset($_POST['submit'])) {
    $firstname =mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $password =mysqli_real_escape_string($conn, $_POST['password']);
    $gender =mysqli_real_escape_string($conn,$_POST['gender']);
    $address =mysqli_real_escape_string($conn,$_POST['address']);
    $pincode =mysqli_real_escape_string($conn,$_POST['pincode']);
    $card_type =mysqli_real_escape_string($conn, $_POST['card_type']);
    $card_number = mysqli_real_escape_string($conn,$_POST['card_number']);
    $exp_date = mysqli_real_escape_string($conn,$_POST['exp_date']);
    $cvv = mysqli_real_escape_string($conn,$_POST['cvv']);
    $nameErr=$emailErr=$phoneErr=$addressErr=$passwordErr="";

    $sql = "SELECT * FROM signup WHERE email='$email' OR password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if($firstname==""){
        $nameErr="firstname cant be empty";
        }
            if ($user['email'] === $email) {
                $emailErr= "Email already exists";
            }
        
        else if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $nameErr = "Only letters and white space allowed";
        }
        else if (!preg_match("/^[a-zA-Z-' ]*$/",$laststname)) {
            $nameErr = "Only letters and white space allowed";
        }
        else if($gender==""){
            $nameErr= "gender cant be empty";
            }

      else if($email==""){
        $emailErr= "Email cant be empty";
        }
        else if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)){
            $emailErr= "Email must be in valid format";
        }
    
        else if($address==""){
            $addressErr= "Address cant be empty";
        }
        else if($password==""){
            $passwordErr= "Password cant be empty";
        }
        else if(strlen($password)<6){
            $passwordErr= "Password must be greater  than 6 digits";
        }
        
     
    
      // Finally, register user if there are no errors in the form
    else {

    


            $sql = "insert into signup values('','$firstname','$lastname','$email','$password','$gender','$address','$pincode','$card_type','$card_number','$exp_date','$cvv')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                header('location:login.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    
    }

?>