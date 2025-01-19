
<?php
   $db = mysqli_connect("localhost","root","","ct");
   if(isset($_POST['men-sub']))
   {
		$profile=$_POST['profile'];
        $fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
		$qualification=$_POST['qualification'];
        $experience=$_POST['experience'];
		$phone=$_POST['phone'];

        $query="INSERT INTO `mentor_reg` (`id`,`profile`, `fname`, `lname`, `email`, `password`, `cpassword`,`qualification`, `experience`, `phone` ) VALUES (NULL, '$profile', '$fname', '$lname', '$email', '$password', '$cpassword','$qualification', '$experience', '$phone' )";
        
        $result=mysqli_query($db, $query);
        if($result)
        {
        echo "<script>alert('Registration Successful');</script>";
        }
        else
        {
        echo "<script>alert('something went wrong:(');</script>";
        }
   }
?>

<?php
   $db = mysqli_connect("localhost","root","","ct");
   if(isset($_POST['submit']))
   {
   
        $name=$_POST['full_name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['cpassword'];

        $query="INSERT INTO `student_reg` (`id`,`name`, `phone_no`, `email`, `password`, `confirm_password`) VALUES (NULL, '$name', '$phone', '$email', '$password', '$confirm_password')";
        
        $result=mysqli_query($db, $query);
        if($result)
        {
        echo "<script>alert('Data saved successfully');</script>";
        }
        else
        {
        echo "<script>alert('something went wrong');</script>";
        }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="CSS/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="style.css"  rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet">
	
    <title>Resume| CareerTime</title>
</head>
<body style="background-image: url('https://wallpaperaccess.com/full/6584451.jpg');">
<?php
    include 'student_register.php';
    include 'mentor_register.php'; 
    include 'login.php';
    include 'navbar.php';
    ?>
<div class="h">
<div >
    <h1 class="text-center my-5 fw-bold">Resume Form</h1>
    <div class="form-container">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border border-dark p-3 mb-3">    
                <h2>Profile Image</h2>
                <div class="mb-3">
                    <label class="form-label">Select a square image 1:1 (Recommended)</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Contact</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession</label>
                    <input type="text" class="form-control" name="profession" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="form-text text-light">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="0300-1234567" pattern="[0-9]{4}-[0-9]{7}" required>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Skills (Max:5)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skillset Name</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select stars based upon your skill level</option>
                        <option value="1">1 - Novice</option>
                        <option value="2">2 - Advanced Beginner</option>
                        <option value="3">3 - Competent</option>
                        <option value="4">4 - Proficient</option>
                        <option value="5">5 - Expert</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-secondary form-control" onclick="addSkill()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Hobbies (Max:4)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-secondary form-control" onclick="addHobby()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>About Me</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Education (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">School/College/University</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Degree Name</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">From</label>
                        <input type="text" name="from1" class="form-control">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">To</label>
                        <input type="text" name="to1" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-secondary form-control" onclick="addEducation()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experience (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-secondary form-control" onclick="addExperience()">+</button>
                </div>
            </div>
            <input type="submit" class="form-control my-2">
        </form>
    </div>
</div>
</div>
    <script src="app.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
    
</body>
</html>
