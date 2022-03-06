<!-- header section -->
<?php
  include 'includes/header.php';
  ?>
<!-- End Header Section-->
    <!-- End Header Section-->

    <hr>
    <div class="col-xl-12 text-center">
    <h2><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></h2> 
    <h3>Would you like to apply for leave</h3>  
 <button  type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="margin-top=200px;">Click here</button>
 </div>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="#" class="leave" method="POST">
            <div class="mb-3 flex">
                <label for="recipient-name" class="col-form-label">Your mail id
                <input type="email" class="form-control" name="email" id="recipient-name" value="<?php echo $row['email']; ?>">
              </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Full Name
            <input type="text" class="form-control" name="fullname" id="recipient-name" value="<?php echo $row['firstname'];?> <?php echo $row['lastname'];?>">
          </div>
            <div class="mb-3">
                    <label for="start">Start date:</label>
                    <input type="date" id="start" name="start"
                        value="2021-12-22"
                        min="2021-12-22" max="2022-12-22">
                        <br>
                    <label for="start">End date:</label>&nbsp;&nbsp;
                        <input type="date" id="start" name="end"
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
        <input type="submit"  class="btn btn-primary" data-bs-dismiss="modal" name="submit">
      </div>
    </div>
  </div>
</div>


<br><br><br><br>

<!-- footer section -->
<?php
  include 'includes/footer.php';
  ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['email'];
    $name = $_POST['fullname'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $text = $_POST['text'];

    $sql="insert into leaves values('','$email','$fullname','$start','$end','$text')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location:manage-admin.php');

      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);

}
?>


</html>