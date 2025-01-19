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
    <link href="CSS/index.css"  rel="stylesheet" >
    <link href="CSS/Practice.css"  rel="stylesheet" >
    <link href="CSS/footer.css"  rel="stylesheet" >

    <title>Resume | CareerTime</title>
    <style>
        aside>div{
    display: inline-block;
    height: 60px;
    width: 60px;
    text-align: center;
    font-size: 40px;
    background-color:  #00CED1;;
    box-shadow: 0 1rem 2rem rgba(3, 9, 92, 0.959);
    border-radius: 100px;
    
}
.heading{
font-size: 30px;
 text-align: center;
 margin-top: 0px;
 padding: 2.5rem 0;
 margin-left: 10px;
}

 .grid-container {
    display: grid;
    grid-template-columns: auto auto ;
    padding: 10px;
    border: 1px solid;
    grid-gap: 50px;
    background-image: url("https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-63452.jpg?w=2000");
    background-repeat: no-repeat;
    background-size: cover;
    }
    .img{
        border: 1px solid ;
        height: 400px;
        width: 300px;
    }
    
         .button{
        font-size: 20px;
        border: 2px solid;
        border-radius: 10px;
        height: 50px;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 300px;
        background-color: white;
    }
    </style>
</head>
<body>
<?php
    include 'student_register.php';
    include 'mentor_register.php'; 
    include 'login.php';
    include 'navbar.php';
    ?>
    <h1 class="heading">
        <aside>
            <div>R</div>
            <div>E</div>
            <div>S</div>
            <div>U</div>
            <div>M</div>
            <div>E</div>
        </aside>
    </h1>
    <div class="grid-container">
        <div class="grid-item"><h1>Template1</h1><img class="img" src="IMG/temp1.jpg" height="350px"><br><a href="resume.php"><button class="button">Edit Template</button></a></div> 
        <div class="grid-item"><h1>Template2</h1><img class="img" src="iMG/resume2.jpg" height="350px"><br><a href="formal.php"><button class="button">Edit Template</button></a></div>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>