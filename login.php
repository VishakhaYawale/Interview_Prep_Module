
 <!-- Login Modal -->
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="login-form" method="post" class="form">
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
            </div>

            <div class="form-group">
                <button type="submit" name ="login" class="btn btn-block btn-primary">Login</button>
            </div>
        </form>

        </div>
        <div class="modal-footer">
          <span>
              <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
              to register a new account
          </span>
        </div>
      </div>
    </div>
  </div>
  <?php
  ob_start();
   $db = mysqli_connect("localhost","root","","ct");
   if(isset($_POST['login']))
   {
   
        
        $user=$_POST['email'];
        $pass=$_POST['password'];

    
        $query="SELECT * FROM `student_reg` WHERE email='$user'AND password='$pass'";
        $query1="SELECT * FROM `mentor_reg` WHERE email='$user'AND password='$pass'";

        $result = mysqli_query($db, $query);
        $result1 = mysqli_query($db, $query1);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $count1 = mysqli_num_rows($result1);  
        
        if($count1 == 1){  
          echo "<h1> <script>alert('Login Successful');</script></h1>";   
          header("Location:http://localhost/CareerTime/Mentor.php");
        }  
        elseif($count == 1)
        {
          echo "<h1> <script>alert('Login Successful');</script></h1>";
          header("Location:http://localhost/CareerTime/index.php");
            
        }
        else
        {  
            echo "<h1> <script>alert('Login failed. Invalid username or password.');</script></h1>";  
        }    
      }    
?>