<?php

                    $sql = "SELECT * FROM tbl_admin";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();

                ?>
<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $row['username']; ?></h2>
              </div>
</div>