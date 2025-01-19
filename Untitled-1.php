<?php
   $db = mysqli_connect("localhost","root","","careertime");
   if(isset($_POST['submit']))
   {
   
        $name=$_POST['full_name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['cpassword'];

        $query="INSERT INTO `student_reg` (`id`,`name`,`phone_no`,`email`,`password`,`confirm_password`) VALUES (NULL,'$name','$phone','$email','$password','$confirm_password')";
        
        $result=mysqli_query($db, $query);
        if($result)
        {
        echo "<script>alert('You have registered successfully');</script>";
        }
        else
        {
        echo "<script>alert('something went wrong');</script>";
        }
   }