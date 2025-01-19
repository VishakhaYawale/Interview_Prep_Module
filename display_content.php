<?php
  
   $db = mysqli_connect("localhost","root","","ct");



        $query= "SELECT * FROM  post_content;
        
if ($result = $mysqli_query($query)) {

    while($row=mysqli_fetch_assoc($result))
    {
        $mentor_email = $row['mentor_email'];
        $content= $row['content'];
        $attachments = $row['attachments'];
        
        echo '<b>'.$mentor_email.$content.'</b><br />';
        echo $attachments.'<br />';
        
    }
$result->free();
}
?>