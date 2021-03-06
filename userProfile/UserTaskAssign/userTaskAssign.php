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
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
      <!-- Header Section -->
      <header class="relative z-50 w-full h-24">
        <div
            class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path
                            d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                        <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                    </g>
                </svg>
                <span class="ml-3 text-xl text-gray-800">Workforce Automation<span class="text-pink-500">.</span></span>
            </a>

            <nav id="nav"
                class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-20 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                <a href="#"
                    class="ml-0  mr-0 font-light duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl ">Home</a>
                <a href="#"
                    class="mr-0 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Attendance</a>
                <a href="#"
                    class="mr-0 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Apply for leave</a>
                    <a href="#"
                    class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">task Assign</a>
                <a href="#"
                    class="font-light duration-100 transition-color hover:text-indigo-600 text-black text-base text-gray-600 sm:text-lg xl:text-xl">Bio data</a>

                    <a href="#"
                    class="ml-6 font-light duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600 text-black text-base  sm:text-lg xl:text-xl">Sign Out</a>
            
            </nav>

            <div id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>
    </header>
    <!-- End Header Section-->

    <hr>

    
    <div class="section footer">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 contact-info">
                    <h2>Contact Info</h2>
                    <span class="address"> Butwal <br>Rupandehi, Nepal</span>
                    <span class="call">Call Us at <b>071-523456</b></span>
                    <span class="mail">mpk@gmail.com</span>
                </div>

                <div class="col-xl-4 we-do">
                    <h2>What We Do</h2>
                    <ul>
                        <li><a href="#">Task management</a></li>
                        <li><a href="#">leave management</a></li>
                        <li><a href="#">Attendence management</a></li>
                        <li><a href="#">workforce management</a></li>
                        <li><a href="#">Many more</a></li>
                    </ul>
                </div>

                <div class="col-xl-4 follow">
                    <h2>Follow Us</h2>
                    <a href="#" class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </div>
    <div class="section copy-right">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <p>?? 2020 mpk. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>