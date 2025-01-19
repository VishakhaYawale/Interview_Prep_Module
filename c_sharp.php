
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
    <link href="CSS/sidebar.css" rel="stylesheet"/>

    <title>C# | CareerTime</title>
</head>
<body>
<?php
      include 'student_register.php';
      include 'mentor_register.php'; 
      include 'login.php';
      include 'navbar.php';
      include 'sidebar2.php';
    ?>
      <div class="sidebar" id="questions">
      <?php
                $db_hostname="localhost";
                $db_username="root";
                $db_password="";
                $db_name="ct";

                $conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
                if(!$conn){
                    echo"connection failed".mysqli_connect_error();
                    exit;
                }

                if(isset($q_no) || isset($question) ||  isset($question)){

                $q_no=$_POST['q_no'];
                $question=$_POST['question'];
                $op1=$_POST['op1'];
                $op2=$_POST['op2'];
                $op3=$_POST['op3'];
                $op4=$_POST['op4'];
                $answer=$_POST['answer'];
                $explation=$_POST['explanation'];
                $diff_level=$_POST['diff_level'];
                $topic_name=$_POST['topic_name'];

                }

                $sql="select * from subjects where topic_name='c#'";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo"error:".mysqli_error($conn);
                    exit;
                }
                while($row=mysqli_fetch_assoc($result))
                {
                    echo $row['q_no']." ";
                    echo "<b>";
                    echo $row['question']."<br/><br/>";
                    echo "</b>";
                    echo"A.";
                    echo $row['op1'];
                    echo("<br/><br/>");
                    echo "B.";
                    echo $row['op2'];
                    echo("<br/><br/>");
                    echo "C.";
                    echo $row['op3'];
                    echo("<br/><br/>");
                    echo"D.";
                    echo $row['op4']."<br/><br/>";
                    ?><form method='post'>
                    <input type='submit' name=<?php echo $row['q_no']; ?>
                            class='button' value='Show Answer' />
                    
                </form>
                <?php
                if(isset($_POST[$row['q_no']])) 
                {
                  echo $row['answer']."<br/>";
                  echo $row['explanation']."<br/><br/>";
                }    

                
                }
                mysqli_close($conn);

              ?>
              <?php
                $db_hostname="localhost";
                $db_username="root";
                $db_password="";
                $db_name="ct";

                $conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

                $sql="select * from subjects  where topic_name='c#'";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                   
                  }
              ?>
              
        </div>
      
      </div>


    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
    

</body>
</html>


   
