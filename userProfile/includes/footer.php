
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
                        <li><a href="task.php">Task management</a></li>
                        <li><a href="userLeaveApp.php">leave management</a></li>
                        <li><a href="UserAttendence.php">Attendence management</a></li>
                        <li><a href="userprofile,php">workforce management</a></li>
                        <li><a href="userprofile.php">Many more</a></li>
                    </ul>
                </div>

                <div class="col-xl-4 follow">
                    <h2>Follow Us</h2>
                    <a href="#" class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="social-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>

                <div class="col-xl-12 text-center">
                    <p>© 2022 mpk. All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

    <script>
        $('.carousel').carousel({
        cycle: true,
        pause: "null"
    })
    </script>

    <script>
        $('.indisplay').slick({
            autoplay:true,
            autoplaySpeed:2000,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 4,
            responsive: [
            {
            breakpoint: 800,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>