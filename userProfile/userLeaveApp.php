<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <!-- tailwind css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header Section -->
    <header class="relative z-50 w-full h-24">
        <div class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116" xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path
                            d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                        <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                    </g>
                </svg>
                <span class="ml-3 text-xl text-gray-800">Workforce Automation<span class="text-pink-500">.</span></span>
            </a>

            <nav id="nav" class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-20 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                <a href="userprofile.php" class="ml-0  mr-0 font-light duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl ">Home</a>
                <a href="UserAttendance.php" class="mr-0 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Attendance</a>
                <a href="userLeaveApp.php" class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Leave</a>
                <a href="#" class="mr-0 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Task</a>

                <!-- <a href="#"
                    class="ml-6 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Sign Out</a>
             -->
                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../admin/dashboard/images/img.jpg" alt="" class="inline object-cover w-10 h-10 ml-8 rounded-full"> </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">profile</a>
                        <a class="dropdown-item" href="../home/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>

                    </div>
                </div>



                <!-- <button 
             class=" ml-10 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl"><img src="../images/architecture.jpeg" alt="" class="inline object-cover w-16 h-16 mr-2 rounded-full">
            </button> -->

            </nav>

            <div id="nav-mobile-btn" class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </header>
    <!-- End Header Section-->
    <!-- End Header Section-->

    <hr>
    <h3>Would you like to apply for leave</h3>
 <button  type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Click here</button>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3 flex">
                <label for="recipient-name" class="col-form-label">Employee ID
                <input type="text" class="form-control" name="employeeid" id="recipient-name">
              </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name
            <input type="text" class="form-control" name="fullname" id="recipient-name">
          </div>
            <div class="mb-3">
                    <label for="start">Start date:</label>
                    <input type="date" id="start" name="trip-start"
                        value="2021-12-22"
                        min="2021-12-22" max="2022-12-22">
                        <br>
                    <label for="start">End date:</label>&nbsp;&nbsp;
                        <input type="date" id="start" name="trip-end"
                            value="2021-12-22"
                            min="2021-12-22" max="2022-12-22">
                    
                </div>        
                  <div class="mb-3">
            <label for="message-text" class="col-form-label">Reason why you wanna take leave?</label>
            <textarea class="form-control" id="message-text" name="text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>


<br><br><br><br>

 
    <div class="section copy-right" >
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <p>© 2020 mpk. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

   
</body>

<?php include('../php/connection.php'); ?>
<?php
if (isset($_POST['submit'])) {
    
    $fullname = $_POST['fullname'];
    $tripstart = $_POST['trip_start'];
    $tripend = $_POST['trip_end'];
    $text = $_POST['text'];
   



            $sql = "insert into leave values('','$fullname','$tripstart','$tripend','$text')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                header('location:../login/login.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    


?>


</html>