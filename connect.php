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
$explation=$_POST['explaination'];
$diff_level=$_POST['diff_level'];
$topic_name=$_POST['topic_name'];

}

$sql="select * from aptitude";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo"error:".mysqli_error($conn);
    exit;
}
while($row=mysqli_fetch_assoc($result))
{
    echo $row['q_no']." ";
    echo $row['question']."<br/><br/>";
    echo"A.";
    echo $row['op1'];
    echo("<br/><br/>");
    echo "B.";
    echo $row['op2'];
    echo("<br/><br/>");
    echo"C.";
    echo $row['op3'];
    echo("<br/><br/>");
    echo"D.";
    echo $row['op4']."<br/><br/>";
}
mysqli_close($conn);

?>