

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="CSS/Post_Content.css"  rel="stylesheet" >
    <link href="CSS/footer.css"  rel="stylesheet" >

    <title>Post Content | CareerTime</title>
</head>
<body style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp5udIjMpyc3NmdiUEY-pxf6KbAZHs0pz41g&usqp=CAU'); background-repeat: no-repeat;
    background-size: cover;">
<h1 style="text-align: center;">Post my content</h1>
<center>
     <form id="post-content-form" method="POST" action="" >
        Email: 
        <input type="text" class="input-item" id="mentor_email" name="mentor_email" required><br><br> 
        Enter Caption/Description:
        <textarea rows="10" cols="12" class="input-item" name="content" required></textarea><br><br> 
        Attach file:
        <input type="file" id="attachments" name="attachments"><br><br>
        <input type="submit" id="submit-content" name="submit-content" value="Post">
     </form>

    <?php
    include 'footer.php';
    ?>
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
    


</body>
</html>

<?php
   $db = mysqli_connect("localhost","root","","ct");
   if(isset($_POST['submit-content']))
   {
		$mentor_email=$_POST['mentor_email'];
      $content=$_POST['content'];
		$attachments=$_POST['attachments'];
      

        $query="INSERT INTO `post_content` (`content_id`,`mentor_email`, `content`, `attachments`) VALUES (NULL, '$mentor_email', '$content', '$attachments')";
        
        $result=mysqli_query($db, $query);
        if($result)
        {
        echo "<script>alert('Content posted successfully');</script>";
        header("Location:http://localhost/CareerTime/Mentor.php");
        }
        else
        {
        echo "<script>alert('Error in posting your content');</script>";
        }
   }
?>