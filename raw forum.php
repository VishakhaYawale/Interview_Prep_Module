<?php
   $db = mysqli_connect("localhost","root","","careertime");
   if(isset($_POST['submit']))
   {
        $sender_email=$_POST['sender_email'];
        $question=$_POST['question'];
        $attachments=$_POST['attachments'];
        $mentor_email=$_POST['mentor_email'];
        $answer=$_POST['answer'];
        $confirm_password=$_POST['ans_attachments'];

        $query="INSERT INTO `questions` (`id`,`sender_email`, `question`, `attachments`, `mentor_email`, `answer`,`ans_attachments`) VALUES (NULL, '$sender_email','$question', '$attachments', '$mentor_email', '$answer', '$ans_attachments')";
        
        $result=mysqli_query($db, $query);
        if($result)
        {
        echo "<script>alert('Question submitted successfully');</script>";
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
<?php
    include 'student_register.php';
    include 'mentor_register.php'; 
    include 'login.php';
    include 'navbar.php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="CSS/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="CSS/Forum.css"  rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet">
	
    <title>QnA Forum| CareerTime</title>
</head>
<body>    
    <div class="c">
      <form method="POST" action="" id="questionform">
        Email: <br/>
        <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text">
                          <i class="fas fa-envelope"></i>
                      </span>
                  </div>
                  <input type="email" class="form-control" id="sender_email" name="sender_email" placeholder="Email" required> <br><br>
              </div>
        Select Category:
        <select name="ctg" id="ctg">
    <optgroup label="Select question category">
      <option value="volvo">Java</option>
      <option value="saab">Python</option>
      <option value="saab">C</option>
      <option value="saab">C++</option>
      <option value="saab">Javascript</option>
    </optgroup>
  </select> <br><br>
        Type your Question: <br><br>
        <textarea name="question" id="question" rows="8" cols="50" required></textarea><br>
        <label for="attachments" >Attachments:</label><br>
        <input type="file"id="attachments" name="attachments" accept="image/png, image/jpeg ,image/jpg"><br><br>
        <button type="submit" class="btn btn-info value="submit" id="submit">Submit</button>
      </form>
    </div>
    
   
   
    
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
</body>
</html>
