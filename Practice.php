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

    <title>Practice Test | CareerTime</title>
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
            <div>P</div>
            <div>R</div>
            <div>A</div>
            <div>T</div>
            <div>I</div>
            <div>C</div>
            <div>E</div><br><br>

            <div>T</div>
            <div>E</div>
            <div>S</div>
            <div>T</div>

        </aside>
    </h1>
    <div class="grid-container">
        <div class="grid-item"><h1>Logical Reasoing</h1><img class="img" src="https://res.cloudinary.com/picked/image/upload/v1597396273/cms/numerical-reasoning-tests-1597396272.svg" height="250px"><br><a href="test.php"><button>Start Test</button></a></div> 
        <div class="grid-item"><h1>Verbal Reasoing</h1><img class="img" src="https://1789a7.medialib.edu.glogster.com/Zdod04KveJqmiYKVJFJD/media/14/14aff668dcbd6d2f9b9e74ed6485281e55e628da/aptitude.png" height="250px"><br><a href="test2.php"><button>Start Test</button></a></div>
        <div class="grid-item"><h1>Numrical Reasoing</h1><img class="img" src="https://www.digitallearning.es/wp-content/uploads/2017/03/Test_cuadrado.jpg" height="250px"><br><a href="test3.php"><button>Start Test</button></a></div> 
        <div class="grid-item"><h1>Number Series</h1><img class="img" src="https://viveinternetseguro.org/wp-content/uploads/2019/06/home_tests.png" height="250px"><br><a href="test4.php"><button>Start Test</button></a></div>

       
    </div>
    <?php
    include 'footer.php';
    ?>
    <script type="text/javascript" src="JS/jquery.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
</body>
</html>