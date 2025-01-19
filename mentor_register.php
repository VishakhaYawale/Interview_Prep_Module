<?php
  ob_start();

   $db = mysqli_connect("localhost","root","","ct");
   if(isset($_POST['men-sub']))
   {
    $profile = $_FILES["profile"]["name"];
	$tempname = $_FILES["profile"]["tmp_name"];	
	$folder = "mentor/".$profile;
        $fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
		$qualification=$_POST['qualification'];
        $experience=$_POST['experience'];
		$phone=$_POST['phone'];


        $query="INSERT INTO `mentor_reg` (`id`,`profile`, `fname`, `lname`, `email`, `password`,`qualification`, `experience`, `phone` ) VALUES (NULL, '$profile', '$fname', '$lname', '$email', '$password','$qualification', '$experience', '$phone' )";
        
        $result=mysqli_query($db, $query);
        if($result)
        {
        echo "<script>alert('Registration Successful');</script>";
        }
        else
        {
        echo "<script>alert('something went wrong:(');</script>";
        }

        if (move_uploaded_file($tempname, $folder)) 
		{
			echo "<script>alert('Image Uploaded successfully');</script>";
		}
		else
		{
			echo "<script>alert('Image Not Uploaded successfully');</script>";
	    }
   }
?>
  
  <!--Mentor SignUp Modal -->
  <div class="modal fade" id="signup-modal-mentor" tabindex="-1" role="dialog" aria-labelledby="signup-modal-mentorLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Mentor Registration Form</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="signup-form-mentor" class="form" role="form" method="post" action="" enctype="multipart/form-data">

                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fas fa-user"></i>
                          </span>
                      </div>
                      Choose Profile Picture:
                      <input type="file" class="form-control" id="profile" name="profile" placeholder="Choose Profile picture" accept="image/png, image/jpeg ,image/jpg"><br><br>
                  </div>
                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fas fa-user"></i>
                          </span>
                      </div>
                      <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" maxlength="30" required>
                  </div>
                    <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fas fa-user"></i>
                          </span>
                      </div>
                      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" maxlength="30" required>
                    </div>
      
                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fas fa-envelope"></i>
                          </span>
                      </div>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
      
                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fas fa-lock"></i>
                          </span>
                      </div>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" minlength="6" required>
                  </div>
      
                 
                  
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="qualification" id="qualification" placeholder="qualification" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="experience" id="experience" placeholder="experience in years" required>
                </div>
            
                <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <i class="fas fa-phone-alt"></i>
                          </span>
                      </div>
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                  </div>
                  <div class="form-group">
                      <button type="submit" name="men-sub" class="btn btn-block btn-primary">Create Account</button>
                  </div>
              </form>
          </div>
          </div>
        </div>
      </div>